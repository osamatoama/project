<?php

use App\Http\Controllers\JoinSearchGroupController;
use App\Http\Controllers\ResearchGroupController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/computing-depatment', function () {
    return view('computing_depatment');
})->name('computing-depatment');

Route::get('/administrative-sciences-depatment', function () {
    return view('administrative_sciences_depatment');
})->name('administrative-sciences-depatment');

Route::get('/finance-department', function () {
    return view('finance_department');
})->name('finance-department');



Route::get('/research', function () {
    return view('researcher_group');
})->name('research');



Route::get('/test', function () {
    dd(user()->id);
})->name('test');


Route::group(['middleware' => 'auth'],function (){

    Route::resource('/user',UserController::class)->except([
        'destroy',
    ]);

    Route::get('/user/destroy/{user}', [UserController::class, 'destroy'])
        ->name('user.destroy');

    Route::resource('/research-group',ResearchGroupController::class)->except([
        'destroy',
    ]);

    Route::get('/research-group/destroy/{research_group}', [ResearchGroupController::class, 'destroy'])
        ->name('research-group.destroy');

    Route::get('/join-research-group', [JoinSearchGroupController::class, 'index'])
        ->name('join-research-group');

    Route::post('/join', [JoinSearchGroupController::class, 'join'])
        ->name('join');

    Route::get('/members/{research_group}', [JoinSearchGroupController::class, 'members'])
        ->name('members');

    Route::get('/accept-join-research/{joinReserchGroup}', [JoinSearchGroupController::class, 'accept'])
        ->name('accept-join-research');


    Route::get('/delete-join-research/{joinReserchGroup}', [JoinSearchGroupController::class, 'delete'])
        ->name('delete-join-research');



    Route::get('/support', [SupportController::class , 'index'])->name('support');
    Route::post('/support', [SupportController::class , 'request_support'])->name('support');


    Route::get('/manage-support-requests', [SupportController::class , 'manage_support_requests'])
        ->name('manage-support-requests');

    Route::get('/accept-support/{support}', [SupportController::class, 'accept'])
        ->name('accept-support');
    Route::get('/delete-support/{support}', [SupportController::class, 'delete'])
        ->name('delete-support');

});


