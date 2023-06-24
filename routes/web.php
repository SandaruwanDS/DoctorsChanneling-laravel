<?php

use Illuminate\Support\Facades\Route;
use App\models\appo;
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
    $total = Appo::count();
    $pending = Appo::where('status', 0)->count();
    $confirmed = Appo::where('status', 1)->count();

    // Calculate percentages
    $pendingPercentage = ($pending / $total) * 100;
    $confirmedPercentage = ($confirmed / $total) * 100;
    
    
    $data = [
        'total' => $total,
        'pending' => $pending,
        'confirmed' => $confirmed,
        'pendingPercentage' => $pendingPercentage,
        'confirmedPercentage' => $confirmedPercentage,
    ];

    return view('dashboard', $data);
}]);

Route::get('/user',['middleware'=>'isuser', function () {
    return view('home');
}]);




Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Routes for User
//route for return Create Appointment View
Route::get('/create_appointment', [App\Http\Controllers\appointment::class, 'returnCreateAppointmentView']);
//route for return store appointment Details
Route::post('/store_appointment', [App\Http\Controllers\appointment::class, 'storeAppointmentDetails']);
//route for return done appointment 
Route::get('/done_appointment', [App\Http\Controllers\appointment::class, 'doneAppointment']);
//route for view appointments in user
Route::get('/show_appointment/{id}', [App\Http\Controllers\appointment::class, 'showAppointment']);
//route for delete appointments by user 
Route::get('/delete_appointment_by_user/{id}', [App\Http\Controllers\appointment::class, 'deleteAppointmentByUser']);
//route for edit appointments by user 
Route::post('/edit_appointment/{id}', [App\Http\Controllers\appointment::class, 'editAppointment']);
//route for view edit appointments form
Route::get('/view_appointment_edit_form/{id}', [App\Http\Controllers\appointment::class, 'viewAppointmentEditForm']);
//route for update appointments
Route::post('/update_appointment/{id}', [App\Http\Controllers\appointment::class, 'updateAppointment']);




//Routes for Admin
//route for view appointments 
Route::get('/view_appointment', [App\Http\Controllers\appointment::class, 'viewAppointment']);
//route for delete appointments 
Route::get('/delete_appointment/{id}', [App\Http\Controllers\appointment::class, 'deleteAppointment']);
//route for edit appointments 
Route::get('/confirm_appointment/{id}', [App\Http\Controllers\appointment::class, 'confirmAppointment']);
// genarete reports
Route::get('/generate_report/{type}', [App\Http\Controllers\DashboardController::class, 'generateReport']);


