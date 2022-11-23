<?php

namespace App\Http\Controllers;

use App\Models\Sce_contact_us_form;
use App\Models\SceApplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        return view('home_sce.userpage');
    }
    // redirect - admin
    public function redirect(){
        $usertype = Auth::user()->usertype;
        if ($usertype=='1') {
            $user_info = User::where('usertype','=','0')->get();
            $sce_applications = SceApplications::all();
            $sce_contact_us = Sce_contact_us_form::all();

            $amount_sce_applications = count($sce_applications);
            $amount_sce_contact_us = count($sce_contact_us);

            $sce_contact_forms = Sce_contact_us_form::orderBy('created_at', 'desc')->get();
            return view('admin.home', compact('amount_sce_applications', 'amount_sce_contact_us', 'user_info', 'sce_contact_forms'));
        } else{
            return view('home_sce.userpage');
        }
    }

    // user dashboard
    public function user_dashboard(){
        if(Auth::user()){
            $usertype = Auth::user()->usertype;
            $id=Auth::user()->id;
            if ($usertype=='1') {
                $user_info = User::where('usertype','=','0')->get();
                $sce_applications = SceApplications::all();
                $sce_contact_us = Sce_contact_us_form::all();

                $amount_sce_applications = count($sce_applications);
                $amount_sce_contact_us = count($sce_contact_us);

                $sce_contact_forms = Sce_contact_us_form::orderBy('created_at', 'desc')->get();
                return view('admin.home', compact('amount_sce_applications', 'amount_sce_contact_us', 'user_info', 'sce_contact_forms'));
            } else{
                $sce_applications = SceApplications::where('user_id','=',$id)->get();
                return view('user_dashboard.home', compact('sce_applications'));
            }
        }else{
            return redirect()->to('/login');
        }
    }
}
