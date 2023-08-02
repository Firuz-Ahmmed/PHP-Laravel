<?php
namespace App\Helper;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTTOKEN
{
   public static function createToken($userEmail): string
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'laravel-token',
            'iat' => time(),
            'exp' => time() + 60 * 60,
            'userEmail' => $userEmail
        ];
        return JWT::encode($payload, $key, 'HS256');


    }
    public static function createTokenForSetPw($userEmail): string
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'laravel-token',
            'iat' => time(),
            'exp' => time() + 60 * 5,
            'userEmail' => $userEmail
        ];
        return JWT::encode($payload, $key, 'HS256');


    }
     public static function VerifyToken($token):string
    {
        try{
            $key = env('JWT_KEY');
            //dd($key);
            //$token = request()->header('Authorization');
            $decode = JWT::decode($token, new Key($key,'HS256'));
            //dd($token);
            //dd($decode);
            return $decode->userEmail;
        }
        catch (\Exception $e){
            return 'Unauthorised';
        }
       
    }
}