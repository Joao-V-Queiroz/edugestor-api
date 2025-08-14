<?php

use Illuminate\Support\Facades\Route;

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
      	 Route::get('/', function () {
			return redirect('/admin');
		});
    });
}

Route::get('/logout', function () {
	session()->flush();
	Auth::logout();
	return redirect('/');
})->name('logout');
