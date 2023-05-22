<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class module14 extends Controller
{
    function inputPage()
    {
        return view("form");
    }
    function inputPageStore(Request $request)
    {
        //Question 01 solution
        $name = $request->input('inputField');
        //Question 02 solution
        $UserAgent=$request->header("user-agent");
        return ("User given Input is:  ".$name."  <br> Requested User-Agent info from header is:  ". $UserAgent);
    }
    //Question 03 solution
    function queryParameter(Request $request,$page = null){

        return($page);

    }
    
    function json(Request $request){
        return $request->input();

    }
    //Question 04 solution
    function jsonResponse(Request $request):JsonResponse{
        $data = [
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25,
            ],
        ];
        
        return response()->json($data, Response::HTTP_OK);
    
    }
    //Question 05 solution
    function fileUpload(Request $request){
        $file=$request->file('avatar');
        $file->move(public_path('uploads'),$file->getClientOriginalName());
        $rememberToken = $request->cookie('remember_token', null);
        return $rememberToken;
    }
    //Question 06 solution
    function requestCookie(Request $request){
        // $name="firstCookie";
        // $value="Hello Ostad,This is my cookie";
        // $minutes=60;
        // $path="/";
        // $domain=$_SERVER['SERVER_NAME'];
        // $secure=false;
        // $httpOnly=true;
        // return response("Cookie Response")->cookie($name,$value,$minutes,$path,$domain,$secure,$httpOnly);
        $rememberToken = $request->cookie('remember_token', null);
        return $rememberToken;

    }
    function submitEmail(Request $request){
        $email=$request->input('email');
        $data=[
            'success'=>true,
            'message'=>'Form submitted successfully.'
        ];
        return response()->json($data);

    }
}
