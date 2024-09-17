<?php

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

    // return view('welcome');
    /* 
    | Above view presents the view that says "
    | "A Laravel Online Store
    | Welcome to the application"
    */

    $viewData = [];
    $viewData["title"] = "Home Page - Online Store";

    return view('home.index')->with("viewData", $viewData);
    /*
    | view() returns a view instance
    | with() passes $viewData array to the view
    */
});

Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
// name() method defines a custom route name