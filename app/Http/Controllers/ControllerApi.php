<?php

namespace App\Http\Controllers;
use App\StudentApi;

use Illuminate\Http\Request;

class ControllerApi extends Controller
{
    public function create(Request $request)
    {
    	$students = new StudentApi();

    	

    	$students->fname = $request->input('fname');
    	$students->lname = $request->input('lname');
    	$students->email = $request->input('email');
    	$students->password = $request->input('password');

    	$students->save();

    	return response()->json($students);
    }

    public function show(){
     $students = StudentApi::all();
     return  response()->json($students);
   }

   public function showid($id)
   {

   	$students = StudentApi::find($id);

     return  response()->json($students);
   	
   }

   public function UpdateByid(Request $request,$id)
    {
    	$students = StudentApi::find($id);

    	$students->fname = $request->input('fname');
    	$students->lname = $request->input('lname');
    	$students->email = $request->input('email');
    	$students->password = $request->input('password');

    	$students->save();

    	return response()->json($students);
    }


    public function deleteByid(Request $request, $id){

     $students = StudentApi::find($id);

      $students->delete();

      return response()->json($students);

    }


}
