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

//logout route for authentication controller
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');



//
//ADMIN VIEWS
Route::middleware(['web', 'admin', 'auth'])->group(function() {
    Route::prefix('admin')->group(function() {

        //HOME ROUTE
        Route::get('/', 'HomeController@admin')->name('admin/home');

        // TABLE ROUTES
        Route::prefix('tables')->group(function() {

            Route::get('/', 'TableController@users')->name('admin/tables');

            Route::get('users', 'TableController@users')->name('admin/tables/users');

            Route::get('workbenches', 'TableController@workbenches')->name('admin/tables/workbenches');
        });


        //CHART ROUTES
        Route::get('/charts', function () {
            return view('admin/charts');
            //
            //
        })->name('charts');

        Route::get('/cards', function () {
            return view('cards');
            //
            //
        })->name('cards');

        //SHOW ROUTES
        Route::get('show/{type}/{id}', function() {
            return view('admin/show', compact('type'));
        })->name('admin/show');

        //EDIT ROUTE
        Route::get('edit', function() {
            return view('admin/edit');
        })->name('admin/edit');
    });
});


//
//USER VIEWS
Route::middleware(['web','auth'])->group(function() {
    Route::prefix('user')->group(function () {

        Auth::routes();

        Route::get('/', 'HomeController@user')->name('user/home');


        Route::get('/condition', function () {
            return view('user/condition');
            //User prefix "/user" prepends all above routes
            //
        })->name('user/condition');

            Route::get('/agreement', function () {
            return view('user/agreement');
            //User prefix "/user" prepends all above routes
            //
        })->name('user/agreement');

        Route::get('/help', function () {
            return view('user/help');
            //User prefix "/user" prepends all above routes
            //
        })->name('user/help');

        Route::get('/rent', function () {
            return view('user/rent');
            //User prefix "/user" prepends all above routes
            //
        })->name('user/rent');

        Route::get('/setup', 'WorkticketController@new')->name('user/setup');

        //
        //USER CONTROLLER VIEWS (NO CLOSURE)
        //

        //Workticket Routes
        Route::get('/ticket', 'WorkticketController@index')->name('user/ticket');

        Route::get('/ticket/show/{id}', 'WorkticketController@show');

        Route::get('/ticket/classroom/{id}', 'ClassroomController@show');

        Route::get('/ticket/{id}', 'WorkticketController@store');

        Route::get('/ticket/extend/{time}', 'WorkticketController@extendRental');

        Route::get('/finalize', 'WorkticketController@finalize')->name('user/finalize');
    });
});


//Route::get('/home', 'HomeController@index')->name('home');
