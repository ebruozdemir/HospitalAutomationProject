<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


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


Route::get('/',[HomeController::class,'index']);

//Route::get('/',[HomeController::class,'index2']);


Route::get('/home',[HomeController::class,'redirect']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addview']);


Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/showuser',[AdminController::class,'showuser']);

Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);

Route::get('/updateuser/{id}',[AdminController::class,'updateuser']);

Route::post('/edituser/{id}',[AdminController::class,'edituser']);

Route::get('/noticeboard',[AdminController::class,'noticeboard']);

Route::post('/publish_annocunment',[AdminController::class,'publish_annocunment']);

Route::get('/showannouncement',[AdminController::class,'showannouncement']);

Route::get('/deleteannouncement/{id}',[AdminController::class,'deleteannouncement']);

Route::get('/updateannouncement/{id}',[AdminController::class,'updateannouncement']);

Route::post('/editannouncement/{id}',[AdminController::class,'editannouncement']);

Route::post('/contact',[HomeController::class,'contact']);


Route::get('/showmessages',[AdminController::class,'showmessages']);


Route::get('/mymessages',[HomeController::class,'mymessages']);

Route::get('/seen/{id}',[AdminController::class,'seen']);

Route::post('/answer_message/{id}',[AdminController::class,'answer_message']);

Route::get('/answer/{id}',[HomeController::class,'answer']);

Route::get('/doctors',[HomeController::class,'doctors']);

Route::get('/contactform',[HomeController::class,'contactform']);

Route::get('/latestnews',[HomeController::class,'latestnews']);

Route::get('/add_user',[AdminController::class,'add_user']);

Route::post('/upload_user',[AdminController::class,'upload_user']);


























