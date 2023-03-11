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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',['middleware'=>'isadmin', function () {
    return view('dashboard');
}]);
Route::get('/user',['middleware'=>'isuser', function () {
    return view('home');
}]);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//route for return Create Appointment View
Route::get('/create_appointment', [App\Http\Controllers\appointment::class, 'returnCreateAppointmentView']);
//route for return store appointment Details
Route::post('/store_appointment', [App\Http\Controllers\appointment::class, 'storeAppointmentDetails']);
//route for return done appointment 
Route::get('/done_appointment', [App\Http\Controllers\appointment::class, 'doneAppointment']);
//route for view appointments 
Route::get('/view_appointment', [App\Http\Controllers\appointment::class, 'viewAppointment']);
//route for delete appointments 
Route::get('/delete_appointment/{id}', [App\Http\Controllers\appointment::class, 'deleteAppointment']);
//route for edit appointments 
Route::get('/update__appointment/{id}', [App\Http\Controllers\appointment::class, 'updateAppointment']);
