<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Login_Controller; // Add this line
use App\Models\Login; // Add this line

class AuthController extends Controller
{
    protected $redirectTo = '/';

    public function handle($request, Closure $next, $guard = null)
    {
        $id= Session::get('id');

        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect('/');
            }
        } else {
            if ($request->session()->hasExpired()) {
                $logout = (new LoginController)->logout($id);
            }
        }

        if (Auth::check() && session()->has('token') && (time() - session('token')['created_at']) > config('auth-timeout.timeout') * 60) {
            Auth::logout();
            return redirect('/');
        }

        return $next($request);
    }
}
