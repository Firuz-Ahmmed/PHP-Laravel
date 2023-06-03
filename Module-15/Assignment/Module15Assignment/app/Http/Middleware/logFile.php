<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class logFile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       //dd($request);
       //(Log::info($request->method()));
       Log::info('Request Input Value: '. json_encode($request->input()));
       Log::info('Request server: ' . json_encode($request->server()));
       Log::info('Request Method: ' . $request->method());
       Log::info('Request header: ' . json_encode($request->header()));
       Log::info('Request cookies: ' .json_encode($request->cookie()));
       Log::info('Request URL: ' . $request->fullUrl());
        return $next($request);
    }
}
