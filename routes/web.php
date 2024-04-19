<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\exportController;

// Route::get('/', function () {
//     return view('mainpage');
// });
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/',[homeController::class, 'dashboard'])->name('dashboard');

    Route::get('/allemailaddress',[homeController::class, 'allemailaddress'])->name('allemailaddress');
    Route::get('/deleteallemailaddress',[homeController::class, 'deleteallemailaddress'])->name('deleteallemailaddress');

    Route::get('/insertemail', function () {
        return view('insertemail');
    })->name('insertemail');
    Route::get('/structure', function () {
        return view('structure');
    })->name('structure');

    Route::get('/alltemplate', [homeController::class, 'alltemplate'])->name('alltemplate');
    Route::get('/templatedelete/{id}', [homeController::class, 'templatedelete'])->name('templatedelete');

    Route::post('/templatestructure', [homeController::class, 'templatestructure'])->name('templatestructure');
    Route::post('/insertemailsave', [homeController::class, 'saveemailaddress'])->name('insertemailsave');

    //email sending
    Route::get('/email', [homeController::class, 'email'])->name('email');
    Route::get('/send/{template}',[homeController::class,'emailsend'])->name('emailsend');
    //import csv file
    // Route::get('/importexportview',[exportController::class,'importexportview'])->name('importexportview');
    // Route::get('/export',[exportController::class,'export'])->name('export');
    Route::post('/import',[exportController::class,'import'])->name('import');
});
