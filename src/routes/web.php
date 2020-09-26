<?php

    Route::post('/email/resend','budisteikul\coresdk\Controllers\VerificationController@resend')->name('verification.resend')->middleware(['web','auth','throttle:6,1']);
	Route::get('/email/verify','budisteikul\coresdk\Controllers\VerificationController@show')->name('verification.notice')->middleware(['web','auth']);
	Route::get('/email/verify/{id}/{hash}','budisteikul\coresdk\Controllers\VerificationController@verify')->name('verification.verify')->middleware(['web','auth','signed','throttle:6,1']);
	Route::get('/login','budisteikul\coresdk\Controllers\LoginController@showLoginForm')->name('login')->middleware(['web','guest']);
	Route::post('/login','budisteikul\coresdk\Controllers\LoginController@login')->middleware(['web','guest']);
	Route::post('/logout','budisteikul\coresdk\Controllers\LoginController@logout')->name('logout')->middleware(['web']);
	Route::post('/password/email','budisteikul\coresdk\Controllers\ForgotPasswordController@sendResetLinkEmail')->name('password.email')->middleware(['web','guest']);
	Route::get('/password/reset','budisteikul\coresdk\Controllers\ForgotPasswordController@showLinkRequestForm')->name('password.request')->middleware(['web','guest']);
	Route::post('/password/reset','budisteikul\coresdk\Controllers\ResetPasswordController@reset')->name('password.update')->middleware(['web','guest']);
	Route::get('/password/reset/{token}','budisteikul\coresdk\Controllers\ResetPasswordController@showResetForm')->name('password.reset')->middleware(['web','guest']);
	Route::get('/register','budisteikul\coresdk\Controllers\RegisterController@showRegistrationForm')->name('register')->middleware(['web','guest']);
	Route::post('/register','budisteikul\coresdk\Controllers\RegisterController@register')->middleware(['web','guest']);

	Route::get('/home','budisteikul\coresdk\Controllers\HomeController@index')->middleware(['web','auth','verified','CoreMiddleware']);
	Route::get('/cms/coresdk/account/setting','budisteikul\coresdk\Controllers\AccountController@setting')->middleware(['web','auth','verified','CoreMiddleware']);
	Route::resource('/cms/coresdk/account','budisteikul\coresdk\Controllers\AccountController',[ 'names' => 'route_coresdk_account' ])->middleware(['web','auth','verified','CoreMiddleware']);
	Route::resource('/cms/coresdk/file','budisteikul\coresdk\Controllers\FileController',[ 'names' => 'route_coresdk_file' ])->middleware(['web','auth','verified','CoreMiddleware']);



