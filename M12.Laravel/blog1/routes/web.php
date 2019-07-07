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
    return view('simpleadmin.homepage.homepage1');
});

Route::get('/category', function () {
    return view('simpleadmin.category.category');
});

Route::get('/article', function () {
    return view('simpleadmin.article.article');
});

Route::get('/user', function () {
    return view('simpleadmin.user.user');
});

Route::get('/banner', function () {
    return view('simpleadmin.banner.banner');
});

Route::get('/email', function () {
    return view('simpleadmin.email.email');
});

Route::get('/product', function () {
    return view('simpleadmin.product.product');
});

Route::get('/permission', function () {
    return view('simpleadmin.permission.permission');
});



Route::get('/abc', function (){
    echo "ABC";
});

Route::get('/def', function (){
    return view('def');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
