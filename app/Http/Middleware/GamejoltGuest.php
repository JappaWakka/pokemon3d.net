<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GamejoltGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!env('GAMEJOLT_GAME_ID') || !env('GAMEJOLT_GAME_PRIVATE_KEY')) {
            redirect()
                ->route('gj-login')
                ->with('error', 'Game Jolt API keys is not set by the admin!');
        }
        if ($request->session()->get('gju')) {
            return redirect()->route('skin-home');
        }

        return $next($request);
    }
}
