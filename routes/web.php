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
Route::post('/authenticate', [App\Http\Controllers\Auth\LoginController::class,'authenticate'])->name('authorize');
Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Registration
Route::post('/registration/addnew', [App\Http\Controllers\RegistrationController::class, 'store'])->name('registration.addnew');
Route::post('/registration/phonenumber', [App\Http\Controllers\RegistrationController::class, 'phonenumber'])->name('registration.phonenumber');
Route::post('/login/twostep', [App\Http\Controllers\Auth\LoginController::class,'twostep'])->name('twostep');
Route::post('/changepassword', [App\Http\Controllers\RegistrationController::class,'changepassword'])->name('changepassword');
Route::get('/getUserName',[App\Http\Controllers\RegistrationController::class, 'getUserName'])->name('getUserName');
Route::get('/login-user', [App\Http\Controllers\RegistrationController::class, 'login'])->name('login-user');
Route::get('/registration', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registration');
Route::get('/registration/{token}/{email}/verify', [App\Http\Controllers\RegistrationController::class, 'verify'])->name('verify');
Route::get('/registration/CheckEmailExist/{email}', [App\Http\Controllers\RegistrationController::class, 'CheckEmailExist'])->name('CheckEmailExist');
Route::get('/registration/SendSMS/{message}/{recipients}', [App\Http\Controllers\RegistrationController::class, 'SendSMS'])->name('SendSMS');
Route::get('/recover', [App\Http\Controllers\RegistrationController::class, 'recover'])->name('recover');
Route::get('/profile/SendRecoverPassEmail/{email}', [App\Http\Controllers\RegistrationController::class, 'SendRecoverPassEmail'])->name('SendRecoverPassEmail');
Route::get('/setpassword/{email}', [App\Http\Controllers\RegistrationController::class, 'ChangePassEmail'])->name('ChangePassEmail');
Route::get('/twosteplogin/{email}', [App\Http\Controllers\RegistrationController::class,'twosteplogin'])->name('twosteplogin');
Route::get('/setnumber', [App\Http\Controllers\RegistrationController::class,'setnumber'])->name('setnumber');
Route::get('/verify_phone', [App\Http\Controllers\RegistrationController::class,'verify_phone'])->name('verify_phone');
Route::get('/GetRegistrations', [App\Http\Controllers\RegistrationController::class, 'GetRegistrations'])->name('GetRegistrations');
Route::get('/GetAllUsers', [App\Http\Controllers\RegistrationController::class, 'GetAllUsers'])->name('GetAllUsers');
Route::get('/GetAllContacts', [App\Http\Controllers\RegistrationController::class, 'GetAllContacts'])->name('GetAllContacts');
Route::get('/topfourServ', [App\Http\Controllers\RegistrationController::class, 'topfourServ'])->name('topfourServ');
Route::get('/topfourSki', [App\Http\Controllers\RegistrationController::class, 'topfourSki'])->name('topfourSki');
Route::get('/topfourPro', [App\Http\Controllers\RegistrationController::class, 'topfourPro'])->name('topfourPro');

//Profile
Route::post('/profile/verifySMS/SixDigits', [App\Http\Controllers\ProfileController::class, 'SixDigits'])->name('SixDigits');
Route::post('/profile/EnableTwoStep', [App\Http\Controllers\ProfileController::class, 'EnableTwoStep'])->name('EnableTwoStep');
Route::post('/profile/DeactivateTwoStep', [App\Http\Controllers\ProfileController::class, 'DeactivateTwoStep'])->name('DeactivateTwoStep');
Route::post('/registration/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('registration.update');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profile/SendVerifySMS', [App\Http\Controllers\ProfileController::class, 'SendVerifySMS'])->name('SendVerifySMS');
Route::get('/profile/PhoneVerifyed', [App\Http\Controllers\ProfileController::class, 'PhoneVerifyed'])->name('PhoneVerifyed');
Route::get('/profile/SendCode', [App\Http\Controllers\ProfileController::class, 'SendCode'])->name('SendCode');
Route::get('/profile/IsTwoStepEnaled', [App\Http\Controllers\ProfileController::class, 'IsTwoStepEnaled'])->name('IsTwoStepEnaled');
Route::get('/profile/GetUserInfo', [App\Http\Controllers\ProfileController::class, 'GetUserInfo'])->name('GetUserInfo');
Route::get('/profile/GetUserAvatar', [App\Http\Controllers\ProfileController::class, 'GetUserAvatar'])->name('GetUserAvatar');
Route::get('/profile/GetUserAddress', [App\Http\Controllers\ProfileController::class, 'GetUserAddress'])->name('GetUserAddress');
Route::get('/profile/UrlIdent/{type}', [App\Http\Controllers\ProfileController::class, 'UrlIdent'])->name('UrlIdent');
Route::get('/profile/registrationValues', [App\Http\Controllers\ProfileController::class, 'registrationValues'])->name('registrationValues');
Route::get('/user/show/{id}', [App\Http\Controllers\ProfileController::class, 'UserShow'])->name('UserShow');
Route::get('/profile/GetNotifications', [App\Http\Controllers\ProfileController::class, 'GetNotifications'])->name('profile.GetNotifications');
Route::get('/notifications', [App\Http\Controllers\ProfileController::class, 'notifications'])->name('notifications');
Route::get('/users', [App\Http\Controllers\ProfileController::class, 'users'])->name('profiles.users');
//Products
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::post('/product/update', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::post('/like', [App\Http\Controllers\ProductController::class, 'like'])->name('product.like');
Route::get('/GetLike/{id}', [App\Http\Controllers\ProductController::class, 'GetLike'])->name('product.GetLike');
Route::get('/product/addnew', [App\Http\Controllers\ProductController::class, 'addnew'])->name('product.addnew');
Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::get('/GetItem/{id}', [App\Http\Controllers\ProductController::class, 'GetItem'])->name('GetItem');
Route::get('/product/view/{id}', [App\Http\Controllers\ProductController::class, 'viewproduct'])->name('view-product');
Route::get('/getproduct/{id}', [App\Http\Controllers\ProductController::class, 'getproduct'])->name('getproduct');
Route::get('/getexchproduct/{id}', [App\Http\Controllers\ProductController::class, 'getexchproduct'])->name('getexchproduct');
Route::get('/getmessages/{id}', [App\Http\Controllers\ProductController::class, 'getmessages'])->name('getmessages');
Route::get('/product/findbycategory/{search}', [App\Http\Controllers\ProductController::class, 'FindByCategory'])->name('FindByCategory');
Route::get('/product/findbyname/{search}', [App\Http\Controllers\ProductController::class, 'FindByName'])->name('FindByName');
Route::get('/product/findbyc/{search}', [App\Http\Controllers\ProductController::class, 'FindByC'])->name('FindByC');
Route::get('/product/findbyn/{search}', [App\Http\Controllers\ProductController::class, 'FindByN'])->name('FindByN');
Route::get('/favorites', [App\Http\Controllers\ProductController::class, 'favorites'])->name('favorites');
Route::get('/sales', [App\Http\Controllers\ProductController::class, 'sales'])->name('sales');
Route::get('/GetSales', [App\Http\Controllers\ProductController::class, 'GetSales'])->name('GetSales');
Route::get('/GetFavorites', [App\Http\Controllers\ProductController::class, 'GetFavorites'])->name('GetFavorites');
Route::get('/GetUsersFavorites', [App\Http\Controllers\ProductController::class, 'GetUsersFavorites'])->name('GetUsersFavorites');
Route::get('/products/matchusers', [App\Http\Controllers\ProductController::class, 'matchusers'])->name('products.matchusers');
Route::get('/gallery', [App\Http\Controllers\ProductController::class, 'gallery'])->name('gallery');
Route::get('/gallery', [App\Http\Controllers\ProductController::class, 'gallery'])->name('categories');
Route::get('/GetTypes', [App\Http\Controllers\ProductController::class, 'GetTypes'])->name('GetTypes');
Route::get('/GetByCategory/{product_id}', [App\Http\Controllers\ProductController::class, 'GetByCategory'])->name('GetByCategory');
//Trades
Route::post('/messages/store', [App\Http\Controllers\MessageController::class, 'store'])->name('messages.store');
Route::post('/messages/delete', [App\Http\Controllers\MessageController::class, 'delete'])->name('messages.delete');
Route::post('/messages/SendResponse', [App\Http\Controllers\MessageController::class, 'SendResponse'])->name('messages.SendResponse');
Route::post('/trade/publish', [App\Http\Controllers\TraddeController::class, 'publish'])->name('trades.publish');
Route::post('/trade/propose', [App\Http\Controllers\TraddeController::class, 'propose'])->name('trades.propose');
Route::post('/trade/accept', [App\Http\Controllers\TraddeController::class, 'accept'])->name('trades.accept');
Route::post('/trade/cancel', [App\Http\Controllers\TraddeController::class, 'cancel'])->name('trades.cancel');
Route::post('/trade/finish', [App\Http\Controllers\TraddeController::class, 'finish'])->name('trades.finish');
Route::post('/trade/confirm', [App\Http\Controllers\TraddeController::class, 'confirm'])->name('trades.confirm');
Route::get('/GetNotifications', [App\Http\Controllers\MessageController::class, 'GetNotifications'])->name('GetNotifications');
Route::post('/notifications/SetView', [App\Http\Controllers\MessageController::class, 'SetView'])->name('notifications.SetView');
Route::get('/GetMessages/{product}/{proposal}', [App\Http\Controllers\MessageController::class, 'GetMessages'])->name('GetMessages');
Route::get('/GetTrades', [App\Http\Controllers\TraddeController::class, 'GetTrades'])->name('GetTrades');
Route::get('/GetTradesPublished', [App\Http\Controllers\TraddeController::class, 'GetTradesPublished'])->name('GetTradesPublished');
Route::get('/GetBySeed', [App\Http\Controllers\TraddeController::class, 'GetBySeed'])->name('GetBySeed');
Route::get('/GetTrade/{id}', [App\Http\Controllers\TraddeController::class, 'GetTrade'])->name('GetTrade');
Route::get('/GetTrader/{id}', [App\Http\Controllers\TraddeController::class, 'GetTrader'])->name('GetTrader');
Route::get('/GetTraderAvatar/{id}', [App\Http\Controllers\TraddeController::class, 'GetTraderAvatar'])->name('GetTraderAvatar');
Route::get('/GetTraderTrades/{id}', [App\Http\Controllers\TraddeController::class, 'GetTraderTrades'])->name('GetTraderTrades');
Route::get('/mytrades/all', [App\Http\Controllers\TraddeController::class, 'GetAllMyTrades'])->name('GetAllMyTrades');
Route::get('/trades/all', [App\Http\Controllers\TraddeController::class, 'GetAllTrades'])->name('GetAllTrades');
Route::get('/trades/GetOffer', [App\Http\Controllers\TraddeController::class, 'GetOffer'])->name('trade.GetOffer');
Route::get('/trades/GetTime', [App\Http\Controllers\TraddeController::class, 'GetTime'])->name('trade.GetTime');
Route::get('/GetPartners', [App\Http\Controllers\TraddeController::class, 'GetPartners'])->name('GetPartners');
Route::get('/GetInProgress', [App\Http\Controllers\TraddeController::class, 'GetInProgress'])->name('GetInProgress');
Route::get('/GetCancelled', [App\Http\Controllers\TraddeController::class, 'GetCancelled'])->name('GetCancelled');
Route::get('/GetCompleted', [App\Http\Controllers\TraddeController::class, 'GetCompleted'])->name('GetCompleted');
Route::get('/GetConfirmed/{tradde}', [App\Http\Controllers\TraddeController::class, 'GetConfirmed'])->name('GetConfirmed');
Route::get('/GetHostQualify', [App\Http\Controllers\TraddeController::class, 'GetHostQualify'])->name('GetHostQualify');
Route::get('/CountProposal/{tradde_id}', [App\Http\Controllers\TraddeController::class, 'CountProposal'])->name('CountProposal');
Route::get('/GetProposal/{tradde_id}', [App\Http\Controllers\TraddeController::class, 'GetProposal'])->name('GetProposal');
Route::get('/GetPProposals/{product_id}', [App\Http\Controllers\TraddeController::class, 'GetPProposals'])->name('GetPProposals');
Route::get('/AcceptedProposal/{tradde_id}', [App\Http\Controllers\TraddeController::class, 'AcceptedProposal'])->name('AcceptedProposal');
Route::get('/GetQualify/{user}', [App\Http\Controllers\TraddeController::class, 'GetQualify'])->name('GetQualify');
Route::get('/GetQualifyStatus/{user_id}/{trade_id}', [App\Http\Controllers\TraddeController::class, 'GetQualifyStatus'])->name('GetQualifyStatus');
Route::get('/GetQualifyTrade/{user_id}/{trade_id}', [App\Http\Controllers\TraddeController::class, 'GetQualifyTrade'])->name('GetQualifyTrade');
Route::get('/MyComments', [App\Http\Controllers\TraddeController::class, 'MyComments'])->name('MyComments');
Route::get('/CountInProgress', [App\Http\Controllers\TraddeController::class, 'CountInProgress'])->name('CountInProgress');
Route::get('/trade/view/{product_id}', [App\Http\Controllers\TraddeController::class, 'viewproduct'])->name('trades.viewproduct');
Route::get('/downloadPDF/{tradde_id}',[App\Http\Controllers\TraddeController::class, 'downloadPDF'])->name('trades.downloadPDF');
Route::get('/GetFullTrades',[App\Http\Controllers\TraddeController::class, 'GetFullTrades'])->name('GetFullTrades');
Route::get('/GetTimeServices',[App\Http\Controllers\TraddeController::class, 'GetTimeServices'])->name('GetTimeServices');
//Categories
Route::post('/categories/like', [App\Http\Controllers\CategoryController::class, 'like'])->name('categories.like');
Route::post('/seedstore', [App\Http\Controllers\CategoryController::class, 'seedstore'])->name('categories.seedstore');
Route::post('/seeddelete', [App\Http\Controllers\CategoryController::class, 'seeddelete'])->name('categories.seeddelete');
Route::get('/GetSeedProducts', [App\Http\Controllers\CategoryController::class, 'GetSeedProducts'])->name('categories.GetSeedProducts');
Route::get('/GetSeedSkills', [App\Http\Controllers\CategoryController::class, 'GetSeedSkills'])->name('categories.GetSeedSkills');
Route::get('/GetSeedServices', [App\Http\Controllers\CategoryController::class, 'GetSeedServices'])->name('categories.GetSeedServices');
Route::get('/categories/choose', [App\Http\Controllers\CategoryController::class, 'choose_categories'])->name('categories.choose');
Route::get('/categories/getchilds/{parent}', [App\Http\Controllers\CategoryController::class, 'getchilds'])->name('getchilds');
Route::get('/categories/getparent/{categoryid}', [App\Http\Controllers\CategoryController::class, 'getparent'])->name('getparent');
Route::get('/categories/getlikes', [App\Http\Controllers\CategoryController::class, 'getlikes'])->name('categories.getlikes');
Route::get('/categories/getusers', [App\Http\Controllers\CategoryController::class, 'getusers'])->name('categories.getusers');
Route::get('/GetUsersCategory', [App\Http\Controllers\CategoryController::class, 'GetUsersCategory'])->name('GetUsersCategory');
Route::get('/categories/matchusers', [App\Http\Controllers\CategoryController::class, 'matchusers'])->name('categories.matchusers');
Route::get('/categories/search/{search}', [App\Http\Controllers\CategoryController::class, 'search'])->name('categories.search');
Route::get('/GetDetailedProductRating', [App\Http\Controllers\CategoryController::class, 'GetDetailedProductRating'])->name('GetDetailedProductRating');
Route::get('/GetDetailedSkillRating', [App\Http\Controllers\CategoryController::class, 'GetDetailedSkillRating'])->name('GetDetailedSkillRating');
Route::get('/GetDetailedServiceRating', [App\Http\Controllers\CategoryController::class, 'GetDetailedServiceRating'])->name('GetDetailedServiceRating');
Route::get('/GetProductRating', [App\Http\Controllers\CategoryController::class, 'GetProductRating'])->name('GetProductRating');
Route::get('/GetSkillRating', [App\Http\Controllers\CategoryController::class, 'GetSkillRating'])->name('GetSkillRating');
Route::get('/GetServiceRating', [App\Http\Controllers\CategoryController::class, 'GetServiceRating'])->name('GetServiceRating');
Route::get('/GetUProductRating/{user_id}', [App\Http\Controllers\CategoryController::class, 'GetUProductRating'])->name('GetUProductRating');
Route::get('/GetUSkillRating/{user_id}', [App\Http\Controllers\CategoryController::class, 'GetUSkillRating'])->name('GetUSkillRating');
Route::get('/GetUServiceRating/{user_id}', [App\Http\Controllers\CategoryController::class, 'GetUServiceRating'])->name('GetUServiceRating');
//Content
Route::post('/contact-us/submit', [App\Http\Controllers\HomeController::class, 'contactUsSubmit'])->name('contact-us.submit');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/faq', [App\Http\Controllers\RegistrationController::class, 'faq'])->name('faq');
Route::get('/how', [App\Http\Controllers\RegistrationController::class, 'how'])->name('how');
Route::get('/legal', [App\Http\Controllers\RegistrationController::class, 'how'])->name('legal');
Route::get('/privacy', [App\Http\Controllers\RegistrationController::class, 'privacy'])->name('privacy');
Route::get('/news', [App\Http\Controllers\RegistrationController::class, 'how'])->name('news');
Route::get('/faq', [App\Http\Controllers\RegistrationController::class, 'faq'])->name('faq');
Route::get('/blog', [App\Http\Controllers\RegistrationController::class, 'how'])->name('blog');
Route::get('/forums', [App\Http\Controllers\RegistrationController::class, 'how'])->name('forums');
//Pictures
Route::post('/upload/product', [App\Http\Controllers\ProductImageController::class, 'upload'])->name('upload');
Route::post('/upload/picture', [App\Http\Controllers\IdentImageController::class, 'picture'])->name('picture');
Route::post('/upload/license', [App\Http\Controllers\IdentImageController::class, 'license'])->name('license');
Route::post('/upload/card', [App\Http\Controllers\IdentImageController::class, 'card'])->name('card');
Route::post('/upload/avatar', [App\Http\Controllers\IdentImageController::class, 'avatar'])->name('avatar');
Route::post('/change/avatar', [App\Http\Controllers\IdentImageController::class, 'changeavatar'])->name('changeavatar');
Route::post('/imagedelete', [App\Http\Controllers\ProductImageController::class, 'imagedelete'])->name('imagedelete');
Route::get('/images/haveavatar', [App\Http\Controllers\IdentImageController::class, 'haveavatar'])->name('haveavatar');
Route::get('/GetUploaded/{type}', [App\Http\Controllers\ProductImageController::class, 'GetUploaded'])->name('GetUploaded');
Route::get('/GetEditPictures/{id}/{type}', [App\Http\Controllers\ProductImageController::class, 'GetEditPictures'])->name('GetEditPictures');
Route::get('/IsUploaded/{type}', [App\Http\Controllers\ProductImageController::class, 'IsUploaded'])->name('IsUploaded');
Route::get('/GetImages', [App\Http\Controllers\ProductImageController::class, 'GetImages'])->name('GetImages');
//Dashboard
Route::post('/contacts/send', [App\Http\Controllers\RegistrationController::class, 'SendContact'])-> name('SendContact');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
//Stripe
Route::post('/stripe/getpayment/{trade_id}', [App\Http\Controllers\StripeController::class, 'Getpayment'])-> name('stripe.Getpayment');
Route::get('/stripe/connect', [App\Http\Controllers\StripeController::class, 'showConnect'])->name('stripe.connect');
Route::get('/stripe/connect/verify', [App\Http\Controllers\StripeController::class, 'verifyConnect'])->name('stripe.connect.post');
Route::get('/my/webhook/endpoint', [App\Http\Controllers\StripeController::class, 'endpoint'])->name('stripe.endpoint');
Route::get('/GetUrlConnectStripe', [App\Http\Controllers\StripeController::class, 'GetUrlConnectStripe'])->name('stripe.GetUrl');