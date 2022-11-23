<?php

namespace App\Http\Controllers;

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
            return view('admin.home', compact('sce_applications', 'user_info'));
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
                return view('admin.home', compact('sce_applications', 'user_info'));
            } else{
                $sce_applications = SceApplications::where('user_id','=',$id)->get();
                return view('user_dashboard.home', compact('sce_applications'));
            }
        }else{
            return redirect()->to('/login');
        }
    }
}
