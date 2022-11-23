<?php

namespace App\Http\Controllers;

use App\Models\Sce_contact_us_form;
use App\Models\SceApplications;
use App\Models\User;
use App\Notifications\SendEmailForSceApplication;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SendEmailFromSceContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use App\Notifications\Notification;

class SceFormController extends Controller
{
    // Contact us form
    public function send_email_contact_us(Request $request){
        $sce_contact_us = new Sce_contact_us_form();
        $sce_contact_us->fname=$request->fname;
        $sce_contact_us->lname=$request->lname;
        $sce_contact_us->email=$request->email;
        $sce_contact_us->phone=$request->phone;
        $sce_contact_us->message=$request->message;
        $sce_contact_us->save();
        // send email notification
        $email = User::find('3');
        $details = [
            'fname' =>$request->fname,
            'lname' =>$request->lname,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'message' =>$request->message,
        ];

        Notification::send($email,new SendEmailFromSceContactUs($details));
        // end send email notification

        return redirect()->back()->with('message', 'Thank you for contacting us! We will get back to you as soon as possible!');
    }
    // Application form
    public function user_sce_application_forms(){
        if(Auth::id()){
            return view('home_sce.sce_application_form');
        }else{
            return redirect('/login');
        }
    }
    public function add_sce_form(Request $request){
        if(Auth::id()!=null){
            $user=Auth::user();
            $form = new SceApplications();
            $form->user_id=$user->id;
            $form->fname=$request->fname;
            $form->mname=$request->mname;
            $form->lname=$request->lname;
            $form->email=$request->email;
            $form->address=$request->address;
            $form->city=$request->city;
            $form->state=$request->state;
            $form->country=$request->country;
            $form->postcode=$request->postcode;
            $form->phone_code=$request->phone_code;
            $form->phone_number=$request->phone_number;
            $form->university_name=$request->university_name;
            if($request->hasFile('degreefile')){
                $form->degreefile=$request->file('degreefile')->store('sce_applications','public');
            }
            if($request->hasFile('marksheetsfile')){
                $form->marksheetsfile=$request->file('marksheetsfile')->store('sce_applications','public');
            }
            $form->company_name=$request->company_name;
            $form->work_position=$request->work_position;
            $form->work_exp=$request->work_exp;
            if($request->hasFile('resume')){
                $form->resume=$request->file('resume')->store('sce_applications','public');
            }
            $form->languageType=$request->languageType;
            $form->score_listening=$request->score_listening;
            $form->score_speaking=$request->score_speaking;
            $form->score_writing=$request->score_writing;
            $form->score_reading=$request->score_reading;
            if($request->hasFile('language_score')){
                $form->language_score=$request->file('language_score')->store('sce_applications','public');
            }
            $form->save();
            $email = User::find('3');
            $details = [
                'fname' =>$request->fname,
                'lname' =>$request->lname,
                'email' =>$request->email,
            ];

            Notification::send($email,new SendEmailForSceApplication($details));
            return redirect()->back()->with('message', 'Submitted successfully! We will contact you shortly!');
        }else{
            return redirect('/login');
        }
    }
}
