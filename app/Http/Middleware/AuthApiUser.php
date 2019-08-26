<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class AuthApiUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (User::where('api_token', $request->token)->first()) {
          return $next($request);
        }

        return response()->json([
          'message' => 'Unauthorized user',
          'status' => 401
        ]);
    }
}
