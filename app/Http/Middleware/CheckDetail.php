<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckDetail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   $user=Auth::user();
        if ($user->completeprofile=="0")
        {
            if($user->type=="student")
            {
                return redirect('addstudentdetail');
            }
            else{
                return redirect('addteacherdetail');
            }
        }
        else{
            return $next($request);
        }

    }
}
