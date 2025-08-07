<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfessorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 
|
|
*/

// Redirect root to admin dashboard.
Route::get('/', function () {
    return redirect()->route('admin.dashboard');
})->name('home');

// Authenticated routes.
Route::middleware(['auth'])->group(function () {
    // Admin dashboard view.
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Students CRUD with delete confirmation.
    Route::get('students/{student}/delete', [StudentController::class, 'confirmDelete'])->name('students.confirmDelete');
    Route::resource('students', StudentController::class);

    // Courses CRUD with delete confirmation.
    Route::get('courses/{course}/delete', [CourseController::class, 'confirmDelete'])->name('courses.confirmDelete');
    Route::resource('courses', CourseController::class);

    // Professors CRUD with delete confirmation.
    Route::get('professors/{professor}/delete', [ProfessorController::class, 'confirmDelete'])->name('professors.confirmDelete');
    Route::resource('professors', ProfessorController::class);
});

// Authentication routes.
require __DIR__ . '/auth.php';


if (file_exists(__DIR__ . '/settings.php')) {
    require __DIR__ . '/settings.php';
}
