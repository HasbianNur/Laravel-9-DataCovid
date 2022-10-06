<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\CovidController;
// use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DataController;
// use App\Http\Controllers\UploadImageController;
// use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
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


Route::get('/blogView', function () {
    return view('blogView');
});

Route::get('index', [BlogController::class, 'index']);

// Route::get('datasiswa', [BlogController::class, 'biodata']);

// Route::get('data/{nama}', [BlogController::class, 'getNama']);

// Route::get('daftar', [BlogController::class, 'pendaftaran']);

Route::post('dataTabelcovid/proses', [BlogController::class, 'proses']);

Route::get('/', [BlogController::class, 'home']);
Route::get('about', [BlogController::class, 'about']);
Route::get('contact', [BlogController::class, 'contact']);
Route::get('dashboard', [BlogController::class, 'dashboard']);
Route::get('corona', [BlogController::class, 'corona']);

// Route::get('data', [BlogController::class, 'data']);
// Route::post('rekam/{alur}', [BlogController::class, 'alur']);
// Route::resource('data', DataController::class);

Route::resource('data', DataController::class);

Route::get('login', [LoginController::class, 'index']);
Route::post('actionlogin', [LoginController::class, 'actionlogin']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('registrasi', [LoginController::class], 'registrasi');
Route::post('registrasi', [LoginController::class], 'store');

Route::resource('students', StudentController::class);
// Route::resource('companies', CompanyCRUDController::class);

// Route::get('upload-image', [UploadImageController::class, 'index']);
// Route::post('save', [UploadImageController::class, 'save']);

//For adding an image
// Route::get('/add-image', [ImageUploadController::class, 'addImage'])->name('images.add');

//For storing an image
// Route::post('/store-image', [ImageUploadController::class, 'storeImage'])
//     ->name('images.store');

//For showing an image
// Route::get('/view-image', [ImageUploadController::class, 'viewImage'])->name('images.view');

Route::resource('products', ProductController::class);

Route::get('dashboard/profile', [DashboardController::class, 'profile']);

// Route::get('corona', [CovidController::class], 'index');

// Route::post('suhutubuh', [BlogController::class, 'suhu']);

// Route::post('vaksinasi', [BlogController::class, 'vaksin'])