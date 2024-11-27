<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckSubscriptionLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
    
        if ($user && $user->subscription_level === 'free' && $user->login_count >= 5) {
            Auth::logout();
            return redirect()->route('login')->withErrors([
                'email' => 'Your free subscription has reached its login limit. Please upgrade to continue.',
            ]);
        }
    
        return $next($request);
    }
    
}
