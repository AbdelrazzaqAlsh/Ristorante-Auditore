<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

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

Route::get('/' , function (){
    // redirect to login page
});


Route::prefix('/manager')->group(function () {

    Route::get('/' , 'ManagerController@dashboard');

    Route::post('/','ManagerController@deleteTable')->name('manager.deleteTable');

    Route::post('/addItem','ManagerController@addItem')->name('manager.addItem');

    Route::post('/submitSizeAndPrice','ManagerController@submitSizeAndPrice')->name('dish.submit.sizeAndPrice');

    Route::post('/deleteItem' , 'ManagerController@deleteItem')->name('manager.deleteItem');

    Route::post('/submit' , 'ManagerController@submitIngrediant')->name('manager.submit.ingrediant');

    Route::get('/addDeleteSupplier' , 'SupplierController@Dashboard');

    Route::post('/addCategory' , 'ManagerController@addCategory')->name('manager.addCategry');

    Route::post('/addSupplier','SupplierController@addSupplier')->name('addSupplier');

    Route::post('/DeleteSupplier','SupplierController@deleteSupplier')->name('deleteSupplier');

    Route::get('/check' , 'ManagerController@retriveOrdersFromWareHouseOrder');

    Route::post('/addOffers' , 'ManagerController@addOffers')->name('submit.offer');

    Route::get('/removeOffer/{id}','ManagerController@removeOffer');

});

Route::prefix('kitchen')->group(function (){

    Route::get('/' , 'KitchenController@index');

    Route::post('/addIngrediant' , 'KitchenController@addIngrediant')->name('kitchen.addIngrediant');

    Route::get('/confirmOrder/{order}' , 'KitchenController@confirmOrder')->name('kitchen.confirmOrder');

    Route::get('/removeIngrediant/{id}' , 'KitchenController@removeIngrediant');

});

Route::prefix('menu')->group(function (){

    Route::get('/' , 'MenuController@index');

    Route::post('/submit/order/' , 'MenuController@submitOrder')->name('menu.submit.order');

    Route::get('/addNotes/{id}', 'MenuController@addNotes')->name('menu.addNotes');

});




