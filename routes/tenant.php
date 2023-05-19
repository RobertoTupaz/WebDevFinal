<?php

declare(strict_types=1);

use App\Http\Controllers\TenantController as StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;


Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    // Route::get('/', function () {
    //     dd(\App\Models\Students::all());
    //     return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
    // });

    // Route::get('admin', [TenantController::class, 'index']);
    Route::get('/', [StudentController::class, 'studentList']) ->name('All Students Controller') -> middleware('auth');

    // Route::get('student/{id}', [StudentController::class, 'index2']) ->name('Student Controller');

    // Route::get('get20up', [StudentController::class, 'index3']) ->name('Students Controller');

    Route::get('a', [UserController::class, function() {
        return view('students.subscribe');
    }]);

    //User Route
    // Route::get('login', [UserController::class, 'login']) ->name('login') -> middleware('guest');

    // Route::post('login/process', [UserController::class, 'process']) -> name('Login Account');

    // Route::get('signup', [UserController::class, 'signUp']) ->name('register') -> middleware('guest');

    // Route::post('store', [UserController::class, 'store']) -> name('Store Data');

    // Route::post('logout', [UserController::class, 'logout']) ->name('logout');

    // Route::get('logout', [UserController::class, 'logout']) ->name('logout');

    Route::get('subscribeNow', [StudentController::class, 'subscribeFunc']);

    //Student Route
    Route::get('admin', [StudentController::class, 'studentList']) -> name('adminHome');

    Route::get('list', [StudentController::class, 'studentList']) -> name('adminHome');

    Route::get('newStudentPage', [StudentController::class, 'newStudent']) -> name('newStudent');

    Route::post('newStudent', [StudentController::class, 'store']) -> name('newStudent');

    Route::get('student/{id}', [StudentController::class, 'show']) -> name('editData');

    Route::put('editStudent/{id}', [StudentController::class, 'update']) -> name('changeData');

    Route::delete('studentDelete/{id}', [StudentController::class, 'deleteStudent']) -> name('deleteData');

    //Question Route
    Route::get('newQuestionPage', [StudentController::class, 'newQuestion']) -> name('newQuestion1');

    Route::post('newQuestion', [StudentController::class, 'store2']) -> name('newQuestion2'); 

    Route::get('question/{id}', [StudentController::class, 'show2']) -> name('editData');

    Route::delete('questionDelete/{id}', [StudentController::class, 'deleteQuestion']);

    Route::put('editQuestion/{id}', [StudentController::class, 'update2']);
});
