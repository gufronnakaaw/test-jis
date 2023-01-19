<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        $routes = [
            'dashboard' => ['administrator', 'user_hq', 'branch_user'],
            'laporan' => ['administrator', 'user_hq'],
            'pengajuan-jaminan' => ['administrator', 'branch_user'],
            'approval' => ['administrator', 'user_hq'],
            'data-jaminan' => ['administrator', 'user_hq', 'branch_user'],
            'data-surety-bond' => ['administrator', 'user_hq'],
            'manajemen-user' => ['administrator'],
            'setting' => ['administrator', 'user_hq', 'branch_user'],
        ];

        if(!in_array(Auth::user()->role, $routes[$request->path()])){
            return redirect('/');
        } else {
            return $next($request);
        }
    }
}
