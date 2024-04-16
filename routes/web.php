<?php


use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Add_ProductController;



Route::get('/', function () {
    return redirect('/Inventory');
});


Route::get('/Add_Product', function (){
    return view('Add_Product');
});

Route::get('/Find_Product', function (){
    return view('Find_Product');
});

Route::get('/Edit_Product', function (){
    return view('Edit_Product');
});

Route::get('/Delete_Product', function (){
    return view('Delete_Product');
});

Route::get('/Inventory', [InventoryController::class, 'Show']);
Route::get('add-add_product', [Add_ProductController::class, 'create']);
Route::post('add-add_product', [Add_ProductController::class, 'store']);

//sir puputok na ulo namin huhu