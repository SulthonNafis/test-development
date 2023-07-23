<?php
namespace App\Helpers;

use App\Models\Item;

class general_helper {

    public static function getFoodList()
    {
        return Item::all();
    }

    public static function isStockEmpty($itemId)
    {
        $item = Item::findOrFail($itemId);
        return $item->stock <= 0;
    }
}
