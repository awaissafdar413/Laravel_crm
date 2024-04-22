<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\exportController;

// Route::get('/', function () {
//     return view('mainpage');
// });
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::controller(homeController::class)->group(function () {
        Route::get('/',  'dashboard')->name('dashboard');

        Route::get('/allemailaddress',  'allemailaddress')->name('allemailaddress');
        Route::get('/deleteallemailaddress',  'deleteallemailaddress')->name('deleteallemailaddress');


        Route::get('/alltemplate',  'alltemplate')->name('alltemplate');
        Route::get('/templatedelete/{id}',  'templatedelete')->name('templatedelete');

        Route::post('/templatestructure',  'templatestructure')->name('templatestructure');
        Route::post('/insertemailsave',  'saveemailaddress')->name('insertemailsave');

        //email sending
        Route::get('email/{id}',  'email')->name('email');
        Route::get('/send/{template}',  'emailsend')->name('emailsend');
    });

    Route::get('/insertemail', function () {
        return view('insertemail');
    })->name('insertemail');
    Route::get('/structure', function () {
        return view('structure');
    })->name('structure');
    //import csv file
    // Route::get('/importexportview',[exportController::class,'importexportview')->name('importexportview');
    // Route::get('/export',[exportController::class,'export')->name('export');
    Route::post('/import', [exportController::class, 'import'])->name('import');
});
