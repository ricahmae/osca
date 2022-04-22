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
                if ($userInfo->userstatus == 1 and $userInfo->userrole ==  'ADMIN') {
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect('admin/dashboard');
                }
                // } elseif ($userInfo->status == 1 and $userInfo->role ==  'ZCDRRMO OFFICER') {
                //     // return back()->with('fail', 'Your account was deactivated ');
                //     $request->session()->put('LoggedUser', $userInfo->id);
                //     return redirect('zcdrrmo/dashboard');
                // } elseif ($userInfo->status == 1 and $userInfo->role ==  'MEDICAL OFFICER') {
                //     // return back()->with('fail', 'Your account was deactivated ');
                //     $request->session()->put('LoggedUser', $userInfo->id);
                //     return redirect('medical-officer/dashboard');
                // } elseif ($userInfo->status == 1 and $userInfo->role ==  'CHO-OPCEN OFFICER') {
                //     // return back()->with('fail', 'Your account was deactivated ');
                //     $request->session()->put('LoggedUser', $userInfo->id);
                //     return redirect('cho-opcen/dashboard');
                // } elseif ($userInfo->status == 1 and $userInfo->role ==  'STAFF') {
                //     // return back()->with('fail', 'Your account was deactivated ');
                //     $request->session()->put('LoggedUser', $userInfo->id);
                //     return redirect('staff/dashboard');
                // }
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
