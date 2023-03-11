<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\emp; //import the emp model to create emp object


class employee extends Controller
{

    //return add_emp view
    function returnAddEmpView(){
        return view('emp.add_emp');
    }


    //store emp details
   function storeEmpDetails(Request $request){ // catch the form data to request array

    //check data validation
    $request->validate([
        'name'=>'required | max:40 |unique:emps',
        'email'=>'required | email | max:255 |unique:emps',
        'nic'=>'required | min:10 | max:12',
        'phone'=>['required','max:10', 'regex:/^0\d{9,}$/']
    ]);

   // dd($request->all());  //display the catched array data usind dd function

   $data = new emp; // create emp model object
    $data->name = $request->name;
// $data->name (database column name)
// $request->name (form input field name)

    $data->email = $request->email;
    $data->nic = $request->nic;
    $data->phone = $request->phone;
    $data->status = 1;
    $data->save();
    return redirect()->back()->with('done','Data Stored Successfully');
    }


    function viewEmpDetails(){
        $users = emp::all(); //call the emp model and fitch the all emp details
        return view('emp.view_emp')->with('user',$users);
    }

    function deleteEmp($id){
       // dd($id);  //see the correct id is set diedoll
       $data = emp::find($id); 
       // dd($data);    //see the correct data is set into the data variable 
       $data->delete();
       return redirect()->back()->with('delete','Data has been Deleted');
    }

    function editEmp($id){
       //dd($id);  //see the correct id is set diedoll
        $data = emp::find($id); 
        return view('emp.edit_emp')->with('data', $data);
    }


    function updateEmpData( $id, Request $request){

         //check data validation
        $request->validate([
            'name'=>'required | max:40',
            'email'=>'required | email | max:255 ',
            'nic'=>'required | min:10 |max:12',
            'phone'=>['required','max:10', 'regex:/^0\d{9,}$/'],
            'status'=>'required | in:0,1'
        ]);



        //  dd($request->all());
        $data = emp::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->nic = $request->nic;
        $data->phone = $request->phone;
        $data->status = $request->status;
        $data->save();
        return redirect('/view_emp')->with('update','Data has been Updated');

    }
}
