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
//     Route::get('/gallery/{id}', function($id)
//     {
//         return 'Gallery '.$id;
//     });
    Route::get('panel', function()
    {
        return 'Panel';
    });
    
    Route::get('gallery', 'GalleryController@index');
    Route::get('gallery/{id}', 'GalleryController@show');
    
    Route::get('/', array('before' => 'auth' ,function()
    {
        return Redirect::to('gallery');
    }));
    
    Route::get('logout', function() {
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
    