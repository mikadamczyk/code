<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });
Route::group(array('before' => 'auth'), function()
{
    Route::get('/', array('before' => 'auth' ,function()
    {
        //return 'Hello, '.Auth::user()->email.'!';
        //return Redirect::to('obslogs');
    }));
    
    Route::get('/logout', function() {
        Auth::logout();
        return Redirect::to('login');
    });
    
//     Route::get('users', array('before' => 'auth', function()
//     {
//         $users = User::all();
//         return View::make('users/users')->with('users',$users);
//     }));

});
    

Route::get('/login', function()
{
    return View::make('login');
});

Route::post('/login', function()
{
    Auth::attempt( array('nick' => Input::get('nick'), 'password' => Input::get('password')) );

    return Redirect::to('/');
});
    