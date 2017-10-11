<?php

Route::group(['middleware' => ['web']], function() {
	Route::auth();
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('backend/dashboard', ['as' => 'backend.dashboard', 'uses' => 'Backend\DashboardController@index']); 
 });



Route::get('/', function () {
    return view('auth.login');
});


/*Route::controller('Login', 'Auth\LoginController@showLoginForm', [
    'Login' => 'auth.login'
]);*/
/*Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');*/
// Login Routes...
    /*Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
*/
    