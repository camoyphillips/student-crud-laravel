<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return redirect()->route('students.index');
})->name('home');


Route::middleware(['auth'])->group(function () {
    Route::resource('students', StudentController::class);
});


require __DIR__.'/auth.php';
require __DIR__.'/settings.php';
