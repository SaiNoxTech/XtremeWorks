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




Auth::routes();

//User Routes
Route::get('/home', 'Index\IndexController@indexPage')->name('home');
