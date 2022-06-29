<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Role;

class IsUser
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
        $roles = auth()->user()->role()->get();
        foreach($roles as $role) {
            $role = Role::whereId($role->role_id)->first();
            if(!empty($role)) {
                if($role->role_name == 'user') {
                    return $next($request);
                }
            }
            
        }
   
        return redirect(`home`)->with(`error`,"You don't have user access.");
    }
}
