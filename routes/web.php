<?php

use App\Http\Controllers\VendingMachineController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vending-machine', [VendingMachineController::class, 'index'])->name('vending-machine.index');
Route::post('/vending-machine/buy', [VendingMachineController::class, 'buyItem'])->name('vending-machine.buy');
Route::post('/vending-machine/return-change', [VendingMachineController::class, 'returnChange'])->name('vending-machine.return-change');
