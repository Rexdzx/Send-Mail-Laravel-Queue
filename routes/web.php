<?php

use App\Mail\SendMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\SendMailController;
// use Str;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('send-email-without-queue', function () {
//     $data = Str::random(9);

//     // return view('email.sendemail', compact('data'));
//     Mail::to('raflylagitobat09@gmail.com')->send(new SendMail($data));
//     dd("Success");
// });

Route::get('/', [SendMailController::class, 'index'])->name('send-mail');
Route::post('post-email', [SendMailController::class, 'store'])->name('post-mail');
