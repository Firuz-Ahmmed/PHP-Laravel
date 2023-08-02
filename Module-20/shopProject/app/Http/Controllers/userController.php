<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\OTPMail;
use App\Helper\JWTTOKEN;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class userController extends Controller
{
    function LoginPage(){
        return view('pages.auth.login-page');
    }

    function RegistrationPage(){
        return view('pages.auth.registration-page');
    }
    function SendOtpPage(){
        return view('pages.auth.send-otp-page');
    }
    function VerifyOTPPage(){
        return view('pages.auth.verify-otp-page');
    }

    function ResetPasswordPage(){
        return view('pages.auth.reset-pass-page');
    }

    function ProfilePage(){
        return view('pages.dashboard.profile-page');
    }
    public function UserRegistration(Request $request)
    {

        try {
            User::create([
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'password' => $request->input('password')

            ]);
            return response()->json([
                'status' => "success",
                "message" => "User Registration Successfully"
            ], '200');
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                "message" => "User Registration Failed"
            ], '400');
        }
    }
    function UserLogin(Request $request)
    {
        $count = User::where('email', '=', $request->input('email'))
            ->where('password', '=', $request->input('password'))
            ->count();
        if ($count == 1) {
            $token = JWTTOKEN::createToken($request->input('email'));
            return response()->json([
                'status' => "success",
                "message" => "User Login Successfully",
                "token" => $token
            ], '200');
        } else {
            return response()->json([
                'status' => "error",
                "message" => "UnAuthorised"
            ], '400');
        }

    }
    function SendOTPCodeToMail(Request $request)
    {
        $email = $request->input('email');
        $otp = rand(1000, 9999);
        $count = User::where('email', '=', $request->input('email'))
            ->count();
        if ($count == 1) {
            Mail::to($email)->send(new OTPMail($otp));
            User::where('email', '=', $email)->update(['otp' => $otp]);
            return response()->json([
                'status' => "success",
                "message" => "Message sent",

            ], '200');
        } else {
            return response()->json([
                'status' => "error",
                "message" => "UnAuthorised"
            ], '400');
        }
    }
    function VerifyOTPCode(Request $request)
    {
        $email = $request->input('email');
        $otp = $request->input('otp');
        $count = User::where('email', '=', $request->input('email'))
            ->where('otp', '=', $request->input('otp'))
            ->count();
        if ($count == 1) {
            User::where('email', '=', $email)->update(['otp' => '0']);
            $token=JWTTOKEN::createTokenForSetPw($request->input('email'));
            return response()->json([
               'status' => "success",
                "message" => "OTP Verified Successfully",
                "token" => $token
            ], '200');
        } else {
            return response()->json([
                'status' => "error",
                "message" => "UnAuthorised"
            ], '400');
        }


    }
    function ResetPassword(Request $request){
        try{
            $email=$request->header('email');
            $password=$request->input('password');
            User::where('email','=',$email)->update(['password'=>$password]);
            return response()->json([
              'status' => "success",
                "message" => "Password Reset Successfully"
            ],'200');
        }
        catch (\Exception $e){
            return response()->json([
              'status' => "error",
                "message" => "Password Reset Failed"
            ], '400');
        }

       
    }
}