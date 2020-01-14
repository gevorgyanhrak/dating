<?php
use App\Events\WebSocketDemoEvent;
use Illuminate\Support\Facades\Artisan;
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

//Artisan::call('cache:clear');
//Artisan::call('config:cache');
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@welcome');


    Route::post('/search', 'SearchController@index')->name('search.index');

    Auth::routes();

    Route::get('/register', 'Auth\RegisterController@signup')->name('register');


    Route::group(['middleware' => ['auth']], function () {
        Route::resource('/profile', 'UserController');
       // Route::get('/chats', 'ChatsController@index');

        Route::get('/get-user-conversation/{id}', 'ChatsController@fetchMessages');

//        Route::get('/messages/{hash}', 'ChatsController@fetchMessages');
//        Route::post('/messages/{hash}', 'ChatsController@sendMessage');

        //  Route::post('/profile/edit/{id}', 'UserController@edit');
    });

    Route::group(['middleware' => ['auth', 'admin']], function () {
        Route::get('/dashboard', 'AdminController@index')->name('dashboard.index');
    });


    Route::get('/home', 'HomeController@index')->name('home');
});


