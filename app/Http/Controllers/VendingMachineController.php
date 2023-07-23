<?php

namespace App\Http\Controllers;

use App\Helpers\general_helper;
use App\Models\Item;
use Illuminate\Http\Request;

class VendingMachineController extends Controller
{
    public function index()
    {
        $items = general_helper::getFoodList();
        $balance = session('balance', 0);
        return view('vending_machine', compact('items', 'balance'));
    }

    public function buyItem(Request $request)
    {
        $itemId = $request->input('food_item');
        $quantity = $request->input('quantity', 1);

        $item = Item::findOrFail($itemId);

        if ($item->stock <= 0) {
            return redirect()->back()->with('error', 'Item is out of stock');
        }

        $totalPrice = $item->price * $quantity;

        $acceptedDenominations = [2000, 5000, 10000, 20000, 50000];
        $amountPaid = $request->input('money');

        if (!in_array($amountPaid, $acceptedDenominations)) {
            return redirect()->back()->with('error', 'Invalid denomination');
        }

        if ($quantity > $item->stock) {
            return redirect()->back()->with('error', 'Not enough stock for '.$item->name.'. Current stock: '.$item->stock.'');
        }

        if ($amountPaid < $totalPrice) {
            return redirect()->back()->with('error', 'Insufficient amount paid');
        }

        // Proses pembelian berhasil
        $change = $amountPaid - $totalPrice;
        $item->stock -= $quantity;
        $item->save();

        session(['balance' => $change]);

        return redirect()->back()->with('success', 'Purchase successful. Change: ' . $change);
    }


    public function returnChange(Request $request)
    {
        $balance = session('balance', 0);
        session(['balance' => 0]);
        Item::where('id', $request->food_item)->update([
            'stock' => 5
        ]);
        return redirect()->back()->with('success', 'Change returned: ' . $balance);
    }
}
