<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\appo;

class appointment extends Controller
{
    //return Create Appointment View
    function returnCreateAppointmentView(){
        return view('appointment.create_appo');
    }


    function doneAppointment(){
        return view('appointment.done_appo');
    }



    function viewAppointment(){
        $appointments = appo::all(); //call the emp model and fitch the all emp details
        return view('appointment.view_appo')->with('appointment', $appointments);
        
    }


       //store Appointment details
   function storeAppointmentDetails(Request $request){ // catch the form data to request array

    //check data validation
    $request->validate([
        'name'=>'required | max:40 ',
        'email'=>'required | email | max:255 ',
        'phone'=>['required','max:10', 'regex:/^0\d{9,}$/'],
        'date'=>'required |after_or_equal:today',
        'department' =>'required ',
        'doctor' => 'required',
        'message' => 'required'
    ]);

   // dd($request->all());  //display the catched array data usind dd function

   $data = new appo; // create emp model object
    $data->name = $request->name;
// $data->name (database column name)
// $request->name (form input field name)

    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->date = $request->date;
    $data->department = $request->department;
    $data->doctor = $request->doctor;
    $data->message = $request->message;
    $data->status = 0;
    $data->save();  
    return redirect('/done_appointment')->with('Done','Appointment Created Successfully !!!');
    }



    function deleteAppointment($id){
        // dd($id);  //see the correct id is set diedoll
        $data = appo::find($id); 
        // dd($data);    //see the correct data is set into the data variable 
        $data->delete();
        return redirect()->back()->with('delete','Data has been Deleted');
     }


     function  updateAppointment($id, Request $request){
        $data = appo::find($id);
        if ($data->status== 0) {
            $data->status = 1;
            $data->save();
            return redirect('/view_appointment')->with('update','Appointment Confirmed Successfully !!!');
        }else{
            return redirect('/view_appointment')->with('already','Appointment Already Confirmed !!!');

        }
        
     }



}
