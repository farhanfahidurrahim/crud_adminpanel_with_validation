<?php

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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//User
Route::get('add-user','UserdetailsController@AddUser')->name('add.user');
Route::post('/insert-userdetails','UserdetailsController@InsertUser');
Route::get('all-user','UserdetailsController@AllUser')->name('all.user');
Route::get('view-user/{id}','UserdetailsController@ViewUser');
Route::get('delete-user/{id}','UserdetailsController@DeleteUser');
Route::get('edit-user/{id}','UserdetailsController@EditUser');
Route::post('update-userdetails/{id}','UserdetailsController@UpdateUser');

//Product
Route::get('add-product','ProductController@AddProduct')->name('add.product');
Route::post('/insert-product','ProductController@InsertProduct');
Route::get('all-product','ProductController@AllProduct')->name('all.product');
Route::get('view-product/{id}','ProductController@ViewProduct');
Route::get('edit-product/{id}','ProductController@EditProduct');
Route::post('update-product/{id}','ProductController@UpdateProduct');
Route::get('delete-product/{id}','ProductController@DeleteProduct');


//Category
Route::get('add-category','CategoryController@AddCategory')->name('add.category');
Route::post('insert-category','CategoryController@InsertCategory');
Route::get('all-category','CategoryController@AllCategory')->name('all.category');


//Sale
Route::get('add-sale','SalesController@AddSale')->name('add.sale');
Route::post('insert-sale','SalesController@InsertSale');
Route::get('all-sale','SalesController@AllSale')->name('all.sale');
