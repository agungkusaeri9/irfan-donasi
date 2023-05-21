<?php

use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KerjasamaController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProgramCategoryController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\PostTagController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RelawanController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TrashController;
use App\Http\Controllers\Admin\SocmedController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'index'])->name('dashboard');
Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
Route::post('/profile',[ProfileController::class,'update'])->name('profile.update');
Route::get('/change-password',[ChangePasswordController::class,'index'])->name('change-password.index');
Route::post('/change-password',[ChangePasswordController::class,'update'])->name('change-password.update');

// users
Route::get('users/data',[UserController::class,'data'])->name('users.data');
Route::resource('users',UserController::class)->except('show');
Route::post('users/change-status',[UserController::class,'changeStatus'])->name('users.change-status');

// post category
Route::get('post-categories/data',[PostCategoryController::class,'data'])->name('post-categories.data');
Route::resource('post-categories',PostCategoryController::class)->except('create','show','edit','update');

// program category
Route::get('programs-categories/data',[ProgramCategoryController::class,'data'])->name('programs-categories.data');
Route::resource('programs-categories',ProgramCategoryController::class)->except('create','show','edit','update');

//payments
Route::get('payments/data',[PaymentController::class,'data'])->name('payments.data');
Route::resource('payments',PaymentController::class)->except('create','show','edit','update');

//transactions
Route::get('transactions/data',[TransactionController::class,'data'])->name('transactions.data');
Route::post('transactions/getById',[TransactionController::class,'getById'])->name('transactions.getById');
Route::post('transactions/print',[TransactionController::class,'print'])->name('transactions.print');
Route::post('transactions/export',[TransactionController::class,'export'])->name('transactions.export');
Route::resource('transactions',TransactionController::class)->except('create','show','edit','update','store');
Route::post('transactions/change-status',[TransactionController::class,'changeStatus'])->name('transactions.change-status');

// posts
Route::get('posts/data',[PostController::class,'data'])->name('posts.data');
Route::post('posts/change-status',[PostController::class,'changeStatus'])->name('posts.change-status');
Route::resource('posts',PostController::class);

// program
Route::get('program/data',[ProgramController::class,'data'])->name('program.data');
Route::resource('program',ProgramController::class);
Route::post('program/change-status',[ProgramController::class,'changeStatus'])->name('program.change-status');
Route::post('program-budget',[ProgramController::class,'budgets'])->name('program.budgets');

// socmed
Route::get('socmeds/data',[SocmedController::class,'data'])->name('socmeds.data');
Route::resource('socmeds',SocmedController::class)->except('create','show','edit','update');

// kerjasama
Route::get('kerjasama/data',[KerjasamaController::class,'data'])->name('kerjasama.data');
Route::resource('kerjasama',KerjasamaController::class)->except('create','show','edit','update');


// relawan
Route::get('relawan/data',[RelawanController::class,'data'])->name('relawan.data');
Route::resource('relawan',RelawanController::class)->except('create','show','edit','update');


// sliders
Route::get('sliders/data',[SliderController::class,'data'])->name('sliders.data');
Route::resource('sliders',SliderController::class);
Route::post('sliders/change-status',[SliderController::class,'changeStatus'])->name('sliders.change-status');

// setting
Route::get('setting',[SettingController::class,'index'])->name('settings.index');

Route::post('setting',[SettingController::class,'update'])->name('settings.update');

// role
Route::post('roles/get',[RoleController::class,'get'])->name('roles.get');

// chart js
Route::post('/ajaxTransaction',[DashboardController::class,'ajaxTransaction'])->name('ajaxTransaction');
Route::post('/ajaxKategoriProgram',[DashboardController::class,'ajaxKategoriProgram'])->name('ajaxKategoriProgram');
