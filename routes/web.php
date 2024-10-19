<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\teacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//login and logout routes
Route::get('/', [AuthController::class, 'index'])->name('index');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {

    //dashboard route
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');


    //student Routes
    Route::get('/student_manage', [studentController::class,'index'])->name('managestudent');
    Route::get('/student_add', [studentController::class,'show'])->name('addstudent');
    Route::post('/student_add',[studentController::class,'create'])->name('student.create');
    Route::get('/deletestudent/{id}',[studentController::class,'delete'])->name('deletestudent');
    Route::get('/editstudent/{id}',[studentController::class,'edit'])->name('editstudent');
    Route::post('/updatestudent/{id}',[studentController::class,'update'])->name('student.update');

    //teachers routes
    Route::get('/teacher_manage', [teacherController::class,'index'])->name('manageteacher');
    Route::get('/teacher_add', [teacherController::class,'show'])->name('addteacher');
    Route::post('/teacher_add', [teacherController::class,'create'])->name('teacher.create');
    Route::get('/deleteteacher/{id}',[teacherController::class,'delete'])->name('deleteteacher');
    Route::get('/editteacher/{id}',[teacherController::class,'edit'])->name('editteacher');
    Route::post('/updateteacher/{id}',[teacherController::class,'update'])->name('teacher.update');

});
