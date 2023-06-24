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

    function showAppointment($id){
        $appointments = Appo::where('user_id', $id)->get();
        return view('appointment.show_appo')->with('appointment', $appointments);  
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
    $data->user_id = $request->user_id;
    $data->name = $request->name; 
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
        return redirect()->back()->with('delete','Appointment has been Deleted');
     }
     
     function deleteAppointmentByUser($id){
        $data = appo::find($id); 
        if ($data->status == 0) {
        $data->delete();
        return redirect()->back()->with('delete','Appointment has been Deleted');
        }else{
            return redirect()->back()->with('already','Appointment Already Confirmed..! Cannot be Deleted.!!');
        }
     }
     
     
    function updateAppointment( $id, Request $request){
    // Check data validation
    $request->validate([
        'name'=>'required | max:40 ',
        'email'=>'required | email | max:255 ',
        'phone'=>['required','max:10', 'regex:/^0\d{9,}$/'],
        'date'=>'required |after_or_equal:today',
        'department' =>'required ',
        'doctor' => 'required',
        'message' => 'required']);

    $appointment = appo::findOrFail($id);
    // Update appointment details
    $appointment->name = $request->name;
    $appointment->email = $request->email;
    $appointment->phone = $request->phone;
    $appointment->date = $request->date;
    $appointment->department = $request->department;
    $appointment->doctor = $request->doctor;
    $appointment->message = $request->message;
    $appointment->save();
    // return view('appointment.done_appo')->with('Update', 'Appointment Updated Successfully!');
    return redirect('/done_appointment')->with('Update', 'Appointment Updated Successfully!');
    }

     function viewAppointmentEditForm($id){
        $appointments = appo::find($id); 
        if ($appointments -> status == 0) {
            //  dd($appointments);
            return view('appointment.edit_appo')->with('appointment', $appointments);  
        }else{
            return redirect()->back()->with('cntedit','Appointment Already Confirmed..! Cannot be Edit.!!');
        }
     }

     function  confirmAppointment($id, Request $request){
        $data = appo::find($id);
        if ($data->status == 0) {
            $data->status = 1;
            $data->save();
            return redirect()->back()->with('update','Appointment Confirmed Successfully !!!');
        }else{
            return redirect()->back()->with('already','Appointment Already Confirmed !!!');
        }  
     }



}
