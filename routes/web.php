<?php
Route::group(['middleware' => ['web']], function() {
	Route::auth();
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


    Route::get('auth/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('auth/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('auth/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']); 

    Route::get('backend/dashboard', ['as' => 'backend.dashboard', 'uses' => 'Backend\DashboardController@index']);
 });


Route::get('backend/users/{users}/confirm',['as' => 'backend.users.confirm', 'uses' => 'Backend\UsersController@confirm']);
Route::resource('backend/users', 'Backend\UsersController');

Route::get('backend/pages/{pages}/confirm', ['as' => 'backend.pages.confirm', 'uses' => 'Backend\PagesController@confirm']);
Route::resource('backend/pages', 'Backend\PagesController');


Route::get('/', function () {
    return view('auth.login');
});

    