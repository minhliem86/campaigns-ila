<?php

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

use App\Models\Product;

Route::get('/back-to-home','BackToHomeController@index_ver2');
Route::get('/back-to-home/thank-you',['as'=>'bth.thanks', 'uses' => 'BackToHomeController@thankyou'] );
Route::post('/back-to-home', ['as' => 'post.backtohome', 'uses' => 'BackToHomeController@postBackToHome'] );

/**
 * TEACH DAY
 */
Route::get('/teacher-day', ['as' =>'teacherday', 'uses' => 'TeacherDayController@teacherday_home']);
Route::post('teacher-day',['as' => 'teacherday.post', 'uses' => 'TeacherDayController@postSubmit']);

Route::get('otp', ['as' => 'otp.get', 'uses' => 'TeacherDayController@otpLayout']);
Route::post('otp', ['as'=>'otp.verify', 'uses' => 'TeacherDayController@verifyOTP']);

Route::get('teacher-day-thankyou', ['as' => 'teacherday.thanks', 'uses' => 'TeacherDayController@thankyou']);