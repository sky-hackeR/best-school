<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
Route::get('/gallery', [App\Http\Controllers\PageController::class, 'gallery'])->name('gallery');
Route::get('/academicProgrammes', [App\Http\Controllers\PageController::class, 'academicProgrammes'])->name('academicProgrammes');







Route::group(['prefix' => 'admin'], function () {
  Route::get('/', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
  Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
  Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);
  Route::post('/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');

  // Route::get('/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
  // Route::post('/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'register']);

  Route::post('/password/email', [App\Http\Controllers\Admin\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.request');
  Route::post('/password/reset', [App\Http\Controllers\Admin\Auth\ResetPasswordController::class, 'reset'])->name('password.email');
  Route::get('/password/reset', [App\Http\Controllers\Admin\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.reset');
  Route::get('/password/reset/{token}', [App\Http\Controllers\Admin\Auth\ResetPasswordController::class, 'showResetForm']);

  Route::get('/home', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('home')->middleware(['auth:admin']);

  Route::get('/siteSettings', [App\Http\Controllers\Admin\AdminController::class, 'siteSettings'])->name('siteSettings')->middleware(['auth:admin']);
  Route::post('/updateSiteSettings', [App\Http\Controllers\Admin\AdminController::class, 'updateSiteSettings'])->name('updateSiteSettings')->middleware(['auth:admin']);

  Route::get('/carousel', [App\Http\Controllers\Admin\AdminController::class, 'carousel'])->name('carousel')->middleware(['auth:admin']);
  Route::post('/newCarousel', [App\Http\Controllers\Admin\AdminController::class, 'newCarousel'])->name('newCarousel')->middleware(['auth:admin']);
  Route::post('/setCarouselStatus', [App\Http\Controllers\Admin\AdminController::class, 'setCarouselStatus'])->name('setCarouselStatus')->middleware(['auth:admin']);
  Route::post('/updateCarousel', [App\Http\Controllers\Admin\AdminController::class, 'updateCarousel'])->name('updateCarousel')->middleware(['auth:admin']);
  Route::post('/deleteCarousel', [App\Http\Controllers\Admin\AdminController::class, 'deleteCarousel'])->name('deleteCarousel')->middleware(['auth:admin']);

  Route::get('/schoolHistory', [App\Http\Controllers\Admin\AdminController::class, 'schoolHistory'])->name('schoolHistory')->middleware(['auth:admin']);
  Route::post('/updateSchoolHistory', [App\Http\Controllers\Admin\AdminController::class, 'updateSchoolHistory'])->name('updateSchoolHistory')->middleware(['auth:admin']);

  Route::get('/visionMission', [App\Http\Controllers\Admin\AdminController::class, 'visionMission'])->name('visionMission')->middleware(['auth:admin']);
  Route::post('/updateVisionMission', [App\Http\Controllers\Admin\AdminController::class, 'updateVisionMission'])->name('updateVisionMission')->middleware(['auth:admin']);

  Route::get('/schoolAnthem', [App\Http\Controllers\Admin\AdminController::class, 'schoolAnthem'])->name('schoolAnthem')->middleware(['auth:admin']);
  Route::post('/updateSchoolAnthem', [App\Http\Controllers\Admin\AdminController::class, 'updateSchoolAnthem'])->name('updateSchoolAnthem')->middleware(['auth:admin']);

  Route::get('/gallery', [App\Http\Controllers\Admin\AdminController::class, 'gallery'])->name('gallery')->middleware(['auth:admin']);
  Route::post('/newGallery', [App\Http\Controllers\Admin\AdminController::class, 'newGallery'])->name('newGallery')->middleware(['auth:admin']);
  Route::post('/setGalleryStatus', [App\Http\Controllers\Admin\AdminController::class, 'setGalleryStatus'])->name('setGalleryStatus')->middleware(['auth:admin']);
  Route::post('/updateGallery', [App\Http\Controllers\Admin\AdminController::class, 'updateGallery'])->name('updateGallery')->middleware(['auth:admin']);
  Route::post('/deleteGallery', [App\Http\Controllers\Admin\AdminController::class, 'deleteGallery'])->name('deleteGallery')->middleware(['auth:admin']);


  Route::get('/management', [App\Http\Controllers\Admin\AdminController::class, 'management'])->name('management')->middleware(['auth:admin']);
  Route::post('/newManagement', [App\Http\Controllers\Admin\AdminController::class, 'newManagement'])->name('newManagement')->middleware(['auth:admin']);
  Route::post('/setManagementStatus', [App\Http\Controllers\Admin\AdminController::class, 'setManagementStatus'])->name('setManagementStatus')->middleware(['auth:admin']);
  Route::post('/updateManagement', [App\Http\Controllers\Admin\AdminController::class, 'updateManagement'])->name('updateManagement')->middleware(['auth:admin']);
  Route::post('/deleteManagement', [App\Http\Controllers\Admin\AdminController::class, 'deleteManagement'])->name('deleteManagement')->middleware(['auth:admin']);


  Route::get('/academicProgramme', [App\Http\Controllers\Admin\AdminController::class, 'academicProgramme'])->name('academicProgramme')->middleware(['auth:admin']);
  Route::post('/newProgramme', [App\Http\Controllers\Admin\AdminController::class, 'newProgramme'])->name('newProgramme')->middleware(['auth:admin']);
  Route::post('/updateProgramme', [App\Http\Controllers\Admin\AdminController::class, 'updateProgramme'])->name('updateProgramme')->middleware(['auth:admin']);
  Route::post('/deleteProgramme', [App\Http\Controllers\Admin\AdminController::class, 'deleteProgramme'])->name('deleteProgramme')->middleware(['auth:admin']);




  

});


