<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    
    Public function applicantindex()
    {
       
        return view('applicant.homepage'); 
    }
}
