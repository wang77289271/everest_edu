<?php

namespace App\Http\Controllers;

use App\Models\SceApplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    // Show user applications
    public function show_application(){
        if(Auth::id()){
            $id=Auth::user()->id;
            $user_applications = SceApplications::orderBy('created_at', 'desc')->where('user_id','=',$id)->get();
            return view('user_dashboard.myApplication', compact('user_applications')); 
        } else{
            return redirect()->to('/login');
        }
    }
    // get single applications
    public function myapplication($id){
        if (Auth::id()) {
            $sce_item = SceApplications::find($id);
            return view('user_dashboard.singleApplication', compact('sce_item'));
        } else{
            return redirect()->to('/login');
        }
    }
}
