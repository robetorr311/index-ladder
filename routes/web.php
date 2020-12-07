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
Auth::routes();
Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::post('/authenticate', [App\Http\Controllers\Auth\LoginController::class,'authenticate'])->name('authorize');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Registration
Route::get('/getUserName',[App\Http\Controllers\RegistrationController::class, 'getUserName'])->name('getUserName');
Route::get('/login-user', [App\Http\Controllers\RegistrationController::class, 'login'])->name('login-user');
Route::get('/registration', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registration');
Route::get('/registration/{token}/{email}/verify', [App\Http\Controllers\RegistrationController::class, 'verify'])->name('verify');
Route::post('/registration/addnew', [App\Http\Controllers\RegistrationController::class, 'store'])->name('registration.addnew');
Route::post('/registration/phonenumber', [App\Http\Controllers\RegistrationController::class, 'phonenumber'])->name('registration.phonenumber');
Route::get('/registration/CheckEmailExist/{email}', [App\Http\Controllers\RegistrationController::class, 'CheckEmailExist'])->name('CheckEmailExist');
Route::get('/registration/SendSMS/{message}/{recipients}', [App\Http\Controllers\RegistrationController::class, 'SendSMS'])->name('SendSMS');
Route::get('/recover', [App\Http\Controllers\RegistrationController::class, 'recover'])->name('recover');
Route::get('/profile/SendRecoverPassEmail/{email}', [App\Http\Controllers\RegistrationController::class, 'SendRecoverPassEmail'])->name('SendRecoverPassEmail');
Route::get('/setpassword/{email}', [App\Http\Controllers\RegistrationController::class, 'ChangePassEmail'])->name('ChangePassEmail');
Route::get('/twosteplogin/{email}', [App\Http\Controllers\RegistrationController::class,'twosteplogin'])->name('twosteplogin');
Route::post('/changepassword', [App\Http\Controllers\RegistrationController::class,'changepassword'])->name('changepassword');
Route::post('/login/twostep', [App\Http\Controllers\Auth\LoginController::class,'twostep'])->name('twostep');
Route::get('/setnumber', [App\Http\Controllers\RegistrationController::class,'setnumber'])->name('setnumber');
Route::get('/verify_phone', [App\Http\Controllers\RegistrationController::class,'verify_phone'])->name('verify_phone');
//Profile
Route::get('/profile/SendVerifySMS', [App\Http\Controllers\ProfileController::class, 'SendVerifySMS'])->name('SendVerifySMS');
Route::post('/profile/verifySMS/SixDigits', [App\Http\Controllers\ProfileController::class, 'SixDigits'])->name('SixDigits');
Route::get('/profile/PhoneVerifyed', [App\Http\Controllers\ProfileController::class, 'PhoneVerifyed'])->name('PhoneVerifyed');
Route::get('/profile/SendCode', [App\Http\Controllers\ProfileController::class, 'SendCode'])->name('SendCode');
Route::get('/profile/IsTwoStepEnaled', [App\Http\Controllers\ProfileController::class, 'IsTwoStepEnaled'])->name('IsTwoStepEnaled');
Route::post('/profile/EnableTwoStep', [App\Http\Controllers\ProfileController::class, 'EnableTwoStep'])->name('EnableTwoStep');
Route::post('/profile/DeactivateTwoStep', [App\Http\Controllers\ProfileController::class, 'DeactivateTwoStep'])->name('DeactivateTwoStep');
Route::post('/registration/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('registration.update');
Route::get('/profile/GetUserInfo', [App\Http\Controllers\ProfileController::class, 'GetUserInfo'])->name('GetUserInfo');
Route::get('/profile/GetUserAvatar', [App\Http\Controllers\ProfileController::class, 'GetUserAvatar'])->name('GetUserAvatar');
Route::get('/profile/GetUserAddress', [App\Http\Controllers\ProfileController::class, 'GetUserAddress'])->name('GetUserAddress');
//Products
Route::post('/like', [App\Http\Controllers\ProductController::class, 'like'])->name('product.like');
Route::post('/imagedelete', [App\Http\Controllers\ProductController::class, 'imagedelete'])->name('imagedelete');
Route::get('/GetLike/{id}', [App\Http\Controllers\ProductController::class, 'GetLike'])->name('product.GetLike');
Route::get('/GetUploaded', [App\Http\Controllers\ProductController::class, 'GetUploaded'])->name('product.GetUploaded');
Route::get('/GetEditPictures/{id}', [App\Http\Controllers\ProductController::class, 'GetEditPictures'])->name('product.GetEditPictures');
Route::post('/upload/product', [App\Http\Controllers\ProductController::class, 'upload'])->name('product.upload');
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('/product/addnew', [App\Http\Controllers\ProductController::class, 'addnew'])->name('product.addnew');
Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::get('/GetItem/{id}', [App\Http\Controllers\ProductController::class, 'GetItem'])->name('GetItem');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'viewproduct'])->name('view-product');
Route::get('/product/findbycategory/{search}', [App\Http\Controllers\ProductController::class, 'FindByCategory'])->name('FindByCategory');
Route::get('/product/findbyname/{search}', [App\Http\Controllers\ProductController::class, 'FindByName'])->name('FindByName');
Route::get('/product/findbyc/{search}', [App\Http\Controllers\ProductController::class, 'FindByC'])->name('FindByC');
Route::get('/product/findbyn/{search}', [App\Http\Controllers\ProductController::class, 'FindByN'])->name('FindByN');
Route::get('/topfourServ', [App\Http\Controllers\ProductController::class, 'topfourServ'])->name('topfourServ');
Route::get('/topfourSki', [App\Http\Controllers\ProductController::class, 'topfourSki'])->name('topfourSki');
Route::get('/topfourPro', [App\Http\Controllers\ProductController::class, 'topfourPro'])->name('topfourPro');
Route::get('/favorites', [App\Http\Controllers\ProductController::class, 'favorites'])->name('favorites');
Route::get('/sales', [App\Http\Controllers\ProductController::class, 'sales'])->name('sales');
Route::get('/GetSales', [App\Http\Controllers\ProductController::class, 'GetSales'])->name('GetSales');
Route::get('/GetFavorites', [App\Http\Controllers\ProductController::class, 'GetFavorites'])->name('GetFavorites');
Route::get('/GetUsersFavorites', [App\Http\Controllers\ProductController::class, 'GetUsersFavorites'])->name('GetUsersFavorites');
Route::get('/gallery', [App\Http\Controllers\ProductController::class, 'gallery'])->name('gallery');
Route::get('/gallery', [App\Http\Controllers\ProductController::class, 'gallery'])->name('categories');
Route::get('/GetTypes', [App\Http\Controllers\ProductController::class, 'GetTypes'])->name('GetTypes');
//Trades
Route::get('/GetTrades', [App\Http\Controllers\TraddeController::class, 'GetTrades'])->name('GetTrades');
//Categories
Route::get('/categories/choose', [App\Http\Controllers\CategoryController::class, 'choose_categories'])->name('categories.choose');
Route::get('/categories/getchilds/{parent}', [App\Http\Controllers\CategoryController::class, 'getchilds'])->name('getchilds');
Route::get('/categories/getparent/{categoryid}', [App\Http\Controllers\CategoryController::class, 'getparent'])->name('getparent');
Route::get('/categories/getlikes', [App\Http\Controllers\CategoryController::class, 'getlikes'])->name('categories.getlikes');
Route::get('/categories/getusers', [App\Http\Controllers\CategoryController::class, 'getusers'])->name('categories.getusers');
Route::post('/categories/like', [App\Http\Controllers\CategoryController::class, 'like'])->name('categories.like');
Route::get('/GetUsersCategory', [App\Http\Controllers\CategoryController::class, 'GetUsersCategory'])->name('GetUsersCategory');
//Content
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us/submit', [App\Http\Controllers\HomeController::class, 'contactUsSubmit'])->name('contact-us.submit');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/faq', [App\Http\Controllers\RegistrationController::class, 'faq'])->name('faq');
Route::get('/how', [App\Http\Controllers\RegistrationController::class, 'how'])->name('how');
Route::get('/legal', [App\Http\Controllers\RegistrationController::class, 'how'])->name('legal');
Route::get('/privacy', [App\Http\Controllers\RegistrationController::class, 'privacy'])->name('privacy');
Route::get('/news', [App\Http\Controllers\RegistrationController::class, 'how'])->name('news');
Route::get('/faq', [App\Http\Controllers\RegistrationController::class, 'faq'])->name('faq');
Route::get('/blog', [App\Http\Controllers\RegistrationController::class, 'how'])->name('blog');
Route::get('/forums', [App\Http\Controllers\RegistrationController::class, 'how'])->name('forums');
//Pictures
Route::post('/upload/picture', [App\Http\Controllers\IdentImageController::class, 'picture'])->name('picture');
Route::post('/upload/license', [App\Http\Controllers\IdentImageController::class, 'license'])->name('license');
Route::post('/upload/card', [App\Http\Controllers\IdentImageController::class, 'card'])->name('card');
Route::post('/upload/avatar', [App\Http\Controllers\IdentImageController::class, 'avatar'])->name('avatar');
Route::get('/images/haveavatar', [App\Http\Controllers\IdentImageController::class, 'haveavatar'])->name('haveavatar');
//Dashboard
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
