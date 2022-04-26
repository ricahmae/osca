<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    Public function dashboard()
    {
        $data = ['LoggedUserInfo' => User::where('userid', '=', session('LoggedUser'))->first()];
        
        return view('admin.dashboard',$data); //admin dashboard
    }
   
    Public function applicantindex()
    {
        $data = ['LoggedUserInfo' => User::where('userid', '=', session('LoggedUser'))->first()];
        
        return view('admin.applicant.index',$data); //admin dashboard
    }
    Public function lossindex()
    {
        $data = ['LoggedUserInfo' => User::where('userid', '=', session('LoggedUser'))->first()];
        
        return view('admin.loss.index',$data); //admin dashboard
    }
    Public function damagedindex()
    {
        $data = ['LoggedUserInfo' => User::where('userid', '=', session('LoggedUser'))->first()];
        
        return view('admin.damaged.index',$data); //admin dashboard
    }
    Public function trackindex()
    {
        $data = ['LoggedUserInfo' => User::where('userid', '=', session('LoggedUser'))->first()];
        
        return view('admin.track.index',$data); //admin dashboard
    }
    Public function benefitindex()
    {
        $data = ['LoggedUserInfo' => User::where('userid', '=', session('LoggedUser'))->first()];
        
        return view('admin.benefit.index',$data); //admin dashboard
    }
    Public function fieldofficeindex()
    {
        $data = ['LoggedUserInfo' => User::where('userid', '=', session('LoggedUser'))->first()];
        
        return view('admin.fieldoffice.index',$data); //admin dashboard
    }
    Public function listindex()
    {
        $data = ['LoggedUserInfo' => User::where('userid', '=', session('LoggedUser'))->first()];
        
        return view('admin.list.index',$data); //admin dashboard
    }
    Public function userindex()
    {
        $user = User::get();
        $usercount = User::get()->count();
        $useractive = User::where(['userstatus' => 'ACTIVE'])->count();
        $usernotactive = User::where(['userstatus' => 'NOTACTIVE'])->count();
        $loggeduser = ['LoggedUserInfo' => User::where('userid', '=', session('LoggedUser'))->first()];
      
        return view('admin.user.index', $loggeduser)->with(compact('user', 'usercount', 'useractive', 'usernotactive'));
    }
    Public function adduser(Request $request)
    {
        $user = User::get();
        $usercount = User::get()->count();
        $useractive = User::where(['userstatus' => 1])->count();
        $usernotactive = User::where(['userstatus' => 0])->count();
        $loggeduser = User::where('userid', '=', session('LoggedUser'))->first();

        if ($request->isMethod('post')) {
            $data = $request->all();
            $usersave = new User;
            $usersave->lastname = $data['Lastname'];
            $usersave->firstname = $data['Firstname'];
            $usersave->middlename = $data['Middlename'];
            $usersave->contactnumber = $data['ContactNumber'];
            $usersave->email = $data['EmailAddress'];
            $usersave->usertype = $data['UserType'];
            $usersave->password = $data['Password'];
            $usersave->userstatus = 'ACTIVE';
            $usersave->createdby = $loggeduser->userid;
            $usersave->save();
           

          
            return redirect('admin/user')->with('success', 'Data has been Saved!');
        }
      
    }

    Public function updateuser(Request $request)
    {
        $user = User::get();
        $usercount = User::get()->count();
        $useractive = User::where(['userstatus' => 1])->count();
        $usernotactive = User::where(['userstatus' => 0])->count();
        $loggeduser = User::where('userid', '=', session('LoggedUser'))->first();

        $patientupdate= DB::table('users')
                ->where('userid', $request->input('userid'))  // find your user by their email
                ->limit(1)  // optional - to ensure only one record is updated.
                ->update(array('firstname' => $request->input('UpdateFirstname'),'lastname' => $request->input('UpdateLastname'),
                'middlename' => $request->input('UpdateMiddlename'),'contactnumber' => $request->input('UpdateContactNumber'),'email' => $request->input('UpdateEmailAddress'),));  // update the recor
             
           

          
            return redirect('admin/user')->with('success', 'Data has been Updated!');
        
      
    }
}
