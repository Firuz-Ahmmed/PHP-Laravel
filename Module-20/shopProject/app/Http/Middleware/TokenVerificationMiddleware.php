<?php

namespace App\Http\Middleware;
use App\Helper\JWTTOKEN;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenVerificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('token');
        //dd($token);
        $result=JWTTOKEN::VerifyToken($token);
       //dd($result);
        if ($result=="Unauthorised") {
            return response()->json([
              'status' => "error",
              'message' => 'Token not Verified'
            ],401); 
        }
        else{
            $request->headers->set('email',$result);
            return $next($request);
        }
        
    }
}
