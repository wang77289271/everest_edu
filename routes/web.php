<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SceFormController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Auth\Events\Verified;

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

Route::get('/',[HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Admin redirect
Route::get('/redirect',[HomeController::class, 'redirect'])->middleware('auth', 'verified');

// User Dashboard
Route::get('/user_dashboard',[HomeController::class, 'user_dashboard']);
Route::get('/show_application',[UserDashboardController::class, 'show_application']);
Route::get('/myapplication/{id}', [UserDashboardController::class, 'myapplication']);

// User - Sce form application
Route::get('/sce-programs-application-form', [SceFormController::class, 'user_sce_application_forms']);
Route::post('add_sce_form', [SceFormController::class, 'add_sce_form']);

// Sce contact us form
Route::post('/send_email_contact_us',[SceFormController::class, 'send_email_contact_us']);

// Admin
Route::get('/admin_get_user',[AdminController::class, 'admin_get_user']);
Route::get('/send_email_to_user/{id}',[AdminController::class, 'send_email_to_user']);
Route::post('/send_email_message_to_user/{id}',[AdminController::class, 'send_email_message_to_user']);
// Admin - Sce section
Route::get('/view_sce_applications',[AdminController::class, 'view_sce_applications']);
Route::post('/create_sce_application',[AdminController::class, 'create_sce_application']);
Route::get('/show_sce_applications',[AdminController::class, 'show_sce_applications']);
Route::get('/delete_sce_application/{id}',[AdminController::class, 'delete_sce_application']);
Route::get('/single_sce_application/{id}',[AdminController::class, 'single_sce_application']);
Route::get('/view_single_sce_application/{id}',[AdminController::class, 'view_single_sce_application']);
Route::post('/update_sce_application/{id}',[AdminController::class, 'update_sce_application']);
// Admin - Sce contact us forom
Route::get('/sce_contact_forms',[AdminController::class, 'sce_contact_forms']);