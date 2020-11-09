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

Route::get('/',[App\Http\Controllers\RegistrationController::class, 'welcome'])->name('welcome');
Auth::routes();
Route::get('/login-user', [App\Http\Controllers\RegistrationController::class, 'login'])->name('login-user');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::post('/authenticate', [App\Http\Controllers\Auth\LoginController::class,'authenticate'])->name('authorize');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/registration', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registration');
Route::get('/registration/{token}/{email}/verify', [App\Http\Controllers\RegistrationController::class, 'verify'])->name('verify');
Route::post('/registration/addnew', [App\Http\Controllers\RegistrationController::class, 'store'])->name('registration.addnew');
Route::post('/registration/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('registration.update');
Route::get('/registration/CheckEmailExist/{email}', [App\Http\Controllers\RegistrationController::class, 'CheckEmailExist'])->name('CheckEmailExist');
Route::get('/registration/SendSMS/{message}/{recipients}', [App\Http\Controllers\RegistrationController::class, 'SendSMS'])->name('SendSMS');
Route::get('/profile/SendVerifySMS', [App\Http\Controllers\ProfileController::class, 'SendVerifySMS'])->name('SendVerifySMS');
Route::post('/profile/verifySMS/SixDigits', [App\Http\Controllers\ProfileController::class, 'SixDigits'])->name('SixDigits');
Route::get('/profile/PhoneVerifyed', [App\Http\Controllers\ProfileController::class, 'PhoneVerifyed'])->name('PhoneVerifyed');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'viewproduct'])->name('view-product');
Route::get('/product/findbycategory/{search}', [App\Http\Controllers\ProductController::class, 'FindByCategory'])->name('FindByCategory');
Route::get('/product/findbyname/{search}', [App\Http\Controllers\ProductController::class, 'FindByName'])->name('FindByName');
Route::get('/product/findbyc/{search}', [App\Http\Controllers\ProductController::class, 'FindByC'])->name('FindByC');
Route::get('/product/findbyn/{search}', [App\Http\Controllers\ProductController::class, 'FindByN'])->name('FindByN');
Route::get('/gallery', [App\Http\Controllers\ProductController::class, 'gallery'])->name('gallery');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us/submit', [App\Http\Controllers\HomeController::class, 'contactUsSubmit'])->name('contact-us.submit');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/faq', [App\Http\Controllers\RegistrationController::class, 'faq'])->name('faq');
Route::get('/how', [App\Http\Controllers\RegistrationController::class, 'how'])->name('how');
Route::get('/legal', [App\Http\Controllers\RegistrationController::class, 'how'])->name('legal');
Route::get('/privacy', [App\Http\Controllers\RegistrationController::class, 'privacy'])->name('privacy');
Route::get('/news', [App\Http\Controllers\RegistrationController::class, 'how'])->name('news');
Route::get('/faq', [App\Http\Controllers\RegistrationController::class, 'how'])->name('faq');
Route::get('/categories/getchilds/{parent}', [App\Http\Controllers\CategoryController::class, 'getchilds'])->name('getchilds');
Route::get('/gallery', [App\Http\Controllers\ProductController::class, 'gallery'])->name('categories');
Route::get('/blog', [App\Http\Controllers\RegistrationController::class, 'how'])->name('blog');
Route::get('/forums', [App\Http\Controllers\RegistrationController::class, 'how'])->name('forums');
Route::post('/upload/picture', [App\Http\Controllers\IdentImageController::class, 'picture'])->name('picture');
Route::post('/upload/license', [App\Http\Controllers\IdentImageController::class, 'license'])->name('license');
Route::post('/upload/card', [App\Http\Controllers\IdentImageController::class, 'card'])->name('card');