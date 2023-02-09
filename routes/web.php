<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardAbsensiController;
use App\Http\Controllers\DashboardStudentController;


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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/developer', function () {
    return view('developer', [
        "title" => "developer"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    $about =[
       Post::all() 
    ];
    
    return view('about', [
        "title" => "About",
        "nama" => "Michael Vincent Efren Malamo",
        "email"=> "alvaromichael044@gmail.com",
        "blog" => $about
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/student', DashboardStudentController::class)
->middleware('cekLevel');

Route::resource('/dashboard/absensi', DashboardAbsensiController::class)
->middleware('auth');

Route::get('/studentExport', [DashboardStudentController::class, 'studentExport'])
->middleware('auth');