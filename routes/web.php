<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\BlogController as WebsiteBlogController;
use App\Http\Controllers\Website\ServiceController as WebsiteServiceController;
use App\Http\Controllers\Website\JobController as WebsiteJobController;
use App\Http\Controllers\Website\ContactController as WebsiteContactController;
use App\Http\Controllers\Website\JobApplicationController;

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

Route::get('admin/register',[RegisterController::class,'showRegister'])->name('register');
Route::post('admin/register',[RegisterController::class,'register'])->name('register.submit');

Route::get('admin/login',[LoginController::class,'showLogin'])->name('login');
Route::post('admin/login',[LoginController::class,'login'])->name('login.submit');
Route::post('admin/logout',[LoginController::class,'logout'])->name('logout');


Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');

    Route::resource('blogs',BlogController::class)->names('admin.blogs');

    Route::resource('contacts',ContactController::class)->names('admin.contacts');

    Route::resource('jobs',JobController::class)->names('admin.jobs');

    Route::resource('services',ServiceController::class)->names('admin.services');

    Route::resource('users',UserController::class)->names('admin.users');
});


// Website Routes=====================

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/blogs', [WebsiteBlogController::class,'index'])->name('website.blogs');
Route::get('/blog/{slug}', [WebsiteBlogController::class,'show'])->name('website.blog.show');

Route::get('/services',[WebsiteServiceController::class,'index'])->name('website.services');
Route::get('/services/{slug}', [WebsiteServiceController::class,'show'])->name('website.service.show');

Route::get('/jobs',[WebsiteJobController::class,'index'])->name('website.jobs');
Route::get('/jobs/{id}', [WebsiteJobController::class,'show'])->name('website.jobs.show');

Route::get('/contact',[WebsiteContactController::class,'create'])->name('website.contacts');
Route::post('/contact',[WebsiteContactController::class,'store'])->name('website.contact.submit');

Route::get('/jobs/{id}/apply', [JobApplicationController::class,'show'])->name('website.job.apply');

Route::post('job-applications',[JobApplicationController::class,'store'])->name('job-applications.submit');


