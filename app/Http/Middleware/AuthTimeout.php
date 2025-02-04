<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class AuthTimeout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $timeout
     * @return mixed
     */
    public function handle($request, Closure $next, $timeout = 300)
    {
        $id = Session::get('id');



        if (Auth::check()) {
            $lastActivity = session('lastActivityTime');
            $currentTime = Carbon::now();

            Log::info('AuthTimeout Middleware Triggered');
            Log::info('Last Activity: ' . $lastActivity);
            Log::info('Current Time: ' . $currentTime);
            if ($lastActivity) {
                $inactiveDuration = $currentTime->diffInSeconds($lastActivity);

                Log::info('Inactive Duration: ' . $inactiveDuration);

                if ($inactiveDuration > $timeout) {
                    Auth::logout();
                    Log::info('User logged out due to inactivity, User ID: ' . $id);

                    // Call the logout method in the Login_Controller
                    $logoutController = new Login_Controller();
                    $response = $logoutController->logout_timeout();

                    // Since logout method is now a POST request, we need to return a response
                    if ($response === true) {
                        Session::flush();
                        return redirect('/')->withErrors(['message' => 'You have been logged out due to inactivity.']);;
                    } else {
                        return redirect('/')->withErrors(['message' => 'You have been logged out due to inactivity.']);
                    }
                }
            }

            // Add this line to store the user's last activity time
            session(['lastActivityTime' => $currentTime]);
        }else{

        }

        return $next($request);
    }
}
