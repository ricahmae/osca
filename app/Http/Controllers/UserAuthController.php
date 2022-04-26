<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAuthController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function resetPassword()
    {
        return view('auth.resetPassword');
    }

    function forgotPassword()
    {
        return view('auth.forgotPassword');
    }
    function check(Request $request)
    {
        //Validate requests
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        $userInfo = User::where('email', '=', $request->email)->first();

        if (!$userInfo) {
            return back()->with('fail', 'We do not recognize your email address');
        } else {
            //check password
            if ($request->password == $userInfo->password) {
                if ($userInfo->userstatus == 'ACTIVE' and $userInfo->usertype ==  'ADMIN') {
                    $request->session()->put('LoggedUser', $userInfo->userid);
                    return redirect('admin/dashboard');
                }
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }
}
