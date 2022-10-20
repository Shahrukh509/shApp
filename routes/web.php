<?php

use App\Http\Controllers\AdminController;
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
//     return view('frontend.home');
// });




// Route::get('/home', 'FrontendController@home');
Route::get('/', 'FrontendController@home');
Route::get('/contact', 'FrontendController@contactus');
Route::get('/faq', 'FrontendController@faq');
Route::get('/privacy', 'FrontendController@privacypolicy');
// Route::get('/header', 'FrontendController@header');
// Route::get('/footer', 'FrontendController@footer');


Route::middleware(['auth:sanctum', 'verified'])->get('/admin', 'AdminController@index')->name('admin');


Route::middleware(['auth:sanctum', 'verified'])->get('/admin/pages', 'PagesController@index');
// Route::get('/admin/contact', 'ContactusController@index');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/settings', 'SettingsController@index');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/settings/logo/{id}', 'SettingsController@logo');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/settings/contact/{id}', 'SettingsController@contact');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/settings/footer/{id}', 'SettingsController@footer');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/privacy', 'PrivacyController@index');
// Route::get('/admin/form', 'PrivacyController@form');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/privacy', 'PrivacyController@store');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/privacy/{id}', 'PrivacyController@edit');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/update', 'PrivacyController@update');
// Route::get('/admin/edit/{id}', 'PrivacyController@edit');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/faq', 'FaqController@index');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/addform', 'FaqController@form');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/addform', 'FaqController@store');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/edit/{id}', 'FaqController@edit');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/update/{id}', 'FaqController@update');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/delete/{id}', 'FaqController@delete');

Route::middleware(['auth:sanctum', 'verified'])->post('/admin/pages/section1/{id}', 'PagesController@first');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/pages/section2/{id}', 'PagesController@second');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/pages/section3/{id}', 'PagesController@third');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/pages/section4/{id}', 'PagesController@fourth');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/pages/section5/{id}', 'PagesController@fifth');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/pages/section6/{id}', 'PagesController@sixth');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/pages/section7/{id}', 'PagesController@seventh');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/pages/contact/{id}', 'ContactusController@Store');
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/pages/faq/{id}', 'FaqheaderController@Store');







Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin.dashboard');
})->name('admin');

Route::get('logout', [AdminController::class, 'logout'])->name('logout');
