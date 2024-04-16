<?php


use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Add_ProductController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/Add_Product', function (){
    return view('Add_Product');
});


Route::get('/Inventory', [InventoryController::class, 'Show']);
Route::get('add-add_product', [Add_ProductController::class, 'create']);
Route::post('add-add_product', [Add_ProductController::class, 'store']);