<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StudentController::class, 'studentList']) ->name('All Students Controller') -> middleware('auth');

// Route::get('student/{id}', [StudentController::class, 'index2']) ->name('Student Controller');

// Route::get('get20up', [StudentController::class, 'index3']) ->name('Students Controller');

Route::get('a', [UserController::class, function() {
    return view('students.subscribe');
}]);

//User Route
Route::get('login', [UserController::class, 'login']) ->name('login') -> middleware('guest');

Route::post('login/process', [UserController::class, 'process']) -> name('Login Account');

Route::get('signup', [UserController::class, 'signUp']) ->name('register') -> middleware('guest');

Route::post('store', [UserController::class, 'store']) -> name('Store Data');

Route::post('logout', [UserController::class, 'logout']) ->name('logout');

Route::get('logout', [UserController::class, 'logout']) ->name('logout');

Route::get('subscribeNow/{id}', [StudentController::class, 'subscribeFunc']) -> middleware('auth');

//Student Route
Route::get('admin', [StudentController::class, 'studentList']) -> name('adminHome') -> middleware('auth');

Route::get('list', [StudentController::class, 'studentList']) -> name('adminHome') -> middleware('auth');

Route::get('newStudentPage', [StudentController::class, 'newStudent']) -> name('newStudent') -> middleware('auth');

Route::post('newStudent/{subs}', [StudentController::class, 'store']) -> name('newStudent') -> middleware('auth');

Route::get('student/{id}', [StudentController::class, 'show']) -> name('editData') -> middleware('auth');

Route::put('editStudent/{id}', [StudentController::class, 'update']) -> name('changeData') -> middleware('auth');

Route::delete('studentDelete/{id}', [StudentController::class, 'deleteStudent']) -> name('deleteData') -> middleware('auth');

//Question Route
Route::get('newQuestionPage', [StudentController::class, 'newQuestion']) -> name('newQuestion1') -> middleware('auth');

Route::post('newQuestion', [StudentController::class, 'store2']) -> name('newQuestion2') -> middleware('auth'); 

Route::get('question/{id}', [StudentController::class, 'show2']) -> name('editData') -> middleware('auth');

Route::delete('questionDelete/{id}', [StudentController::class, 'deleteQuestion']) -> name('deleteData') -> middleware('auth');

Route::put('editQuestion/{id}', [StudentController::class, 'update2']) -> name('changeData') -> middleware('auth');