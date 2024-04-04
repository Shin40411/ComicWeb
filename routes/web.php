<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\TuKhoaController;
use App\Http\Controllers\IndexController;


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

Route::get('/', [IndexController::class,'home']);
Route::get('/danh-muc/{slug}', [IndexController::class,'danhmuc']);
Route::get('/truyen-hot', [IndexController::class,'truyenhot']);
Route::get('/xem-truyen/{slug}', [IndexController::class,'xemtruyen']);
Route::get('/xem-chapter/{slug_truyen}/{slug}', [IndexController::class,'xemchapter']);
Route::get('/tim-kiem', [IndexController::class,'timkiem']);
Route::get('/tim-kiem-tags/{tag}', [IndexController::class,'tags']);
Route::post('/timkiem-ajax', [IndexController::class,'timkiem_ajax']);
Route::post('/truyennoibat', [TruyenController::class, 'truyennoibat']);
Route::get('/theo-doi', [IndexController::class, 'theodoi']);
Route::get('/lich-su', [IndexController::class, 'lichsu']);
Route::get('/tim-kiem-nang-cao', [IndexController::class, 'loctimkiem']);
Route::post('/insert-rating', [IndexController::class, 'insert_rating']);
Route::post('/load-comment', [IndexController::class, 'load_comment']);
Route::post('/send-comment', [IndexController::class, 'send_comment']);
Route::post('/show-replyform', [IndexController::class, 'show_replyform']);
Route::post('/reply-comment', [IndexController::class, 'reply_comment']);

Route::get('/tai-khoan',[IndexController::class, 'login_customer']);
Route::post('/dang-nhap',[IndexController::class, 'dang_nhap']);
Route::get('/dang-xuat',[IndexController::class, 'logout_customer']);
Route::post('/add-customer',[IndexController::class, 'add_customer']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/danhmuc', DanhmucController::class);
Route::resource('/truyen', TruyenController::class);
Route::resource('/chapter', ChapterController::class);
Route::resource('/tukhoatruyen', TuKhoaController::class);









