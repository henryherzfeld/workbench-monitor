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


//redirect "/" and "/index.php" URL
//catches initial page
Route::get('/', function() {
    return redirect ('admin');
});

Route::get('/index.php', function() {
    return redirect ('admin');
})->name('index');


////
////USER VIEWS
//Route::prefix('user')->group(function () {
//
//    Route::get('/workticket', function () {
//        return view('workticket');
//        //User prefix "/user" prepends all above routes
//        //
//    })->name('workticket');
//});

//
//ADMIN VIEWS
Route::prefix('admin')->group(function() {

    //HOME ROUTE
    Route::get('/', 'HomeController@index')->name('home');

    // TABLE ROUTES
    Route::prefix('tables')->group(function() {

        Route::get('/', 'TableController@index')->name('tables')->middleware('auth');;

        Route::get('users', 'TableController@users')->name('tables/users')->middleware('auth');;

        Route::get('workbenches', 'TableController@workbenches')->name('tables/workbenches')->middleware('auth');
    });


    //CHART ROUTES
    Route::get('/charts', function () {
        return view('admin.charts');
        //
        //
    })->name('charts')->middleware('auth');;

    Route::get('/cards', function () {
        return view('cards');
        //
        //
    })->name('cards')->middleware('auth');;
});

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
