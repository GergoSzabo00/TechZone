<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        if(session()->has('email'))
        {
            $email = session()->get('email');
            return view('auth.verify-email')->with(compact('email'));
        }
        else
        {
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
