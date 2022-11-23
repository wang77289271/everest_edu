<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SceApplications;
use App\Models\User;
use App\Notifications\SendEmailToUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function view_sce_applications(){
        if (Auth::id() && Auth::user()->usertype=='1') {
          return view('admin.sce.sce_applications');
        }
        else{
          return redirect()->to('/login');
        }
    }
    public function create_sce_application(Request $request){
        $user_id = Auth::id();
       $sce_application = new SceApplications();

       $sce_application->fname=$request->fname;
       $sce_application->mname=$request->mname;
       $sce_application->$user_id;
       $sce_application->lname=$request->lname;
       $sce_application->email=$request->email;
       $sce_application->address=$request->address;
       $sce_application->city=$request->city;
       $sce_application->state=$request->state;
       $sce_application->country=$request->country;
       $sce_application->postcode=$request->postcode;
       $sce_application->phone_code=$request->phone_code;
       $sce_application->phone_number=$request->phone_number;
       $sce_application->university_name=$request->university_name;
       if($request->hasFile('degreefile')){
          $sce_application->degreefile=$request->file('degreefile')->store('','local');
       }
       if($request->hasFile('marksheetsfile')){
          $sce_application->marksheetsfile=$request->file('marksheetsfile')->store('local');
       }
       $sce_application->company_name=$request->company_name;
       $sce_application->work_position=$request->work_position;
       $sce_application->work_exp=$request->work_exp;
       if($request->hasFile('resume')){
          $sce_application->resume=$request->file('resume')->store('local');
       }
       $sce_application->languageType=$request->languageType;
       $sce_application->score_listening=$request->score_listening;
       $sce_application->score_speaking=$request->score_speaking;
       $sce_application->score_writing=$request->score_writing;
       $sce_application->score_reading=$request->score_reading;
    //    $sce_application->language_score=$request->language_score;
      if($request->hasFile('language_score')){
          $sce_application->language_score=$request->file('language_score')->store('local');
       }
       $sce_application->status=$request->status;

      //  dd($sce_application);
       $sce_application->save();
       return redirect()->back()->with('message', 'Added Successfully');
    }

    public function show_sce_applications(){
      if (Auth::id() && Auth::user()->usertype=='1') {
        $items = SceApplications::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.sce.show_sce_applications', compact('items'));
      }
      else{
          return redirect()->to('/login');
      }
    }
    public function single_sce_application($id){
      if (Auth::id() && Auth::user()->usertype=='1') {
        $item = SceApplications::find($id);
        return view('admin.sce.single_sce_application', compact('item'));
      }
      else{
            return redirect()->to('/login');
        }
    }
    public function view_single_sce_application($id){
        if (Auth::id() && Auth::user()->usertype=='1') {
          $sce_item = SceApplications::find($id);
          return view('admin.sce.view_single_sce', compact('sce_item'));
        }
        else{
          return redirect()->to('/login');
        }
    }
    public function delete_sce_application($id){
      $item = SceApplications::find($id);
      $item->delete();

      return redirect()->to('/show_sce_applications')->with('message', 'Deleted Successfully!');
    }
    public function update_sce_application(Request $request, $id){
      $item = SceApplications::find($id);
      // dd($request->file('degreefile'));
      $item->fname=$request->fname;
      $item->mname=$request->mname;
      $item->lname=$request->lname;
      $item->email=$request->email;
      $item->address=$request->address;
      $item->city=$request->city;
      $item->state=$request->state;
      $item->country=$request->country;
      $item->postcode=$request->postcode;
      $item->phone_code=$request->phone_code;
      $item->phone_number=$request->phone_number;
      $item->university_name=$request->university_name;
      if($request->hasFile('degreefile')){
        $item->degreefile=$request->file('degreefile')->store('sce_applications','public');
      }
      if($request->hasFile('marksheetsfile')){
        $item->marksheetsfile=$request->file('marksheetsfile')->store('sce_applications','public');
      }
      $item->company_name=$request->company_name;
      $item->work_position=$request->work_position;
      $item->work_exp=$request->work_exp;
    //    $item->resume=$request->resume;
      if($request->hasFile('resume')){
          $item->resume=$request->file('resume')->store('sce_applications','public');
      }
      $item->languageType=$request->languageType;
      $item->score_listening=$request->score_listening;
      $item->score_speaking=$request->score_speaking;
      $item->score_writing=$request->score_writing;
      $item->score_reading=$request->score_reading;
    //    $item->language_score=$request->language_score;
      if($request->hasFile('language_score')){
          $item->language_score=$request->file('language_score')->store('sce_applications','public');
      }
      $item->status=$request->status;

      $item->save();

      return redirect()->to("/view_single_sce_application/$item->id")->with('message', 'Updated Successfully!');
    }

    public function admin_get_user(){
      if (Auth::id() && Auth::user()->usertype=='1') {
        $user_info = User::where('usertype','=','0')->get();
        return view('admin.users',compact('user_info'));
      }
      else{
        return redirect()->to('/login');
      }
      
    }
    public function send_email_to_user($id){
      if (Auth::id() && Auth::user()->usertype=='1') {
        $user = User::find($id);
        return view('admin.send_email_to_user', compact('user'));
      }
      else{
        return redirect()->to('/login');
      }
    }
    public function send_email_message_to_user(Request $request, $id){
      if (Auth::id() && Auth::user()->usertype=='1') {
        $user = User::find($id);
        $details = [
            'send_user_email_subject'=>$request->send_user_email_subject,
            'send_user_email_greeting' =>$request->send_user_email_greeting,
            'send_user_email_content' =>$request->send_user_email_content,
        ];
        Notification::send($user,new SendEmailToUser($details));

        return redirect()->back()->with('message', 'Message sent successfully!');
      }
      else{
        return redirect()->to('/login');
      }
    }
}
