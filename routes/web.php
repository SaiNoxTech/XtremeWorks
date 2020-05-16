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

//Social Login //

Route::get('/login/{social}','Auth\LoginController@SocialLogin')->where('social','twitter|facebook|linkdin|google|github');
Route::get('/login/{social/callback}','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkdin|google|github');

///Site Main Routes ///


//Pages
Route::get('/', 'Index\IndexController@indexPage');
Route::get('/HowItWorks', 'Index\IndexController@HowItWorksPage');
Route::get('/MicroJobs', 'Index\IndexController@MicroJobsPage');
Route::get('/JobDetail', 'Index\IndexController@JobDetailPage');


Route::get('product', 'Payments\RazorpayController@razorpayProduct');
Route::post('paysuccess', 'Payments\RazorpayController@razorPaySuccess');
Route::post('razor-thank-you', 'Payments\RazorpayController@RazorThankYou');

Route::get('wallet', 'Payments\RazorpayController@Wallet');
Route::post('paymentrequest', 'Payments\RazorpayController@paymentrequest');
Route::post('paymentresponse', 'Payments\RazorpayController@paymentresponse');


Auth::routes();

//User Routes
Route::get('/home', 'Index\IndexController@indexPage')->name('home');

Route::prefix('user')->group(function() {
    Route::get('/dashboard', 'User\UserDashboardController@UserDashboard')->name('user.dashboard');
    Route::get('/wallet/add', 'User\UserDashboardController@AddBalance')->name('user.addbalance');
    Route::post('/wallet/deposit', 'User\UserDashboardController@DepositBalance')->name('user.depositBalance');
    Route::post('/wallet/PaymentStatus', 'Payments\RazorpayController@paymentresponse')->name('user.WalletSuccess');
    Route::get('/wallet/transactions', 'User\UserDashboardController@paymenttranscations')->name('user.paymenttranscations');
    Route::get('/wallet/Withdrawl', 'User\UserDashboardController@paymentwithdrawl')->name('user.withdrawl');
});
