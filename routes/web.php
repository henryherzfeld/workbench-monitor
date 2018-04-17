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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

//
//ADMIN VIEWS
Route::middleware(['admin', 'auth'])->group(function() {
    Route::prefix('admin')->group(function() {

        //HOME ROUTE
        Route::get('/', 'HomeController@admin')->name('admin/home');

        // TABLE ROUTES
        Route::prefix('tables')->group(function() {

            Route::get('/', 'TableController@index')->name('tables');

            Route::get('users', 'TableController@users')->name('tables/users');

            Route::get('workbenches', 'TableController@workbenches')->name('tables/workbenches');
        });


        //CHART ROUTES
        Route::get('/charts', function () {
            return view('admin.charts');
            //
            //
        })->name('charts');

        Route::get('/cards', function () {
            return view('cards');
            //
            //
        })->name('cards');

        Route::get('edit', function() {
            return view('admin/edit');
        })->name('edit');
    });
});


//
//USER VIEWS
Route::middleware(['auth'])->group(function() {
    Route::prefix('user')->group(function () {


        Route::get('/', 'HomeController@user')->name('user/home');


        Route::get('/condition', function () {
            return view('user/condition');
            //User prefix "/user" prepends all above routes
            //
        })->name('condition');

            Route::get('/agreement', function () {
            return view('user/agreement');
            //User prefix "/user" prepends all above routes
            //
        })->name('agreement');

        Route::get('/extension', function () {
            return view('user/extension');
            //User prefix "/user" prepends all above routes
            //
        })->name('extension');

        Route::get('/help', function () {
            return view('user/help');
            //User prefix "/user" prepends all above routes
            //
        })->name('help');

        Route::get('/rent', function () {
            return view('user/rent');
            //User prefix "/user" prepends all above routes
            //
        })->name('rent');

        Route::get('/setup', function () {
            return view('user/setup');
            //User prefix "/user" prepends all above routes
            //
        })->name('setup');

        Route::get('/workticket', function () {
            return view('user/workticket');
            //User prefix "/user" prepends all above routes
            //
        })->name('workticket');

    });
});



Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
