<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ValidateTaskData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:225',
            'description' => 'required|string|max:225',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Validation failed', 'data' => $validator->errors()], 422);
        }

        return $next($request);
    }

}
