<?php

namespace App\Http\Controllers;
use App\Models\Admission;
use Illuminate\Http\Request;
use Mail;
use Session;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function admission(Request $req)
    {
        $req->validate([
            'name' => 'required|min:3',
            'mobile' => 'required|numeric|min:10',
            'course' => 'required',
            'score' => 'required',
            'state' => 'required',
            'email' => 'email'
        ]);
        $name=$req->input('name');
        $mobile=$req->input('mobile');
        $email=$req->input('email');
        $course=$req->input('course');
        $score=$req->input('score');
        $state=$req->input('state');
        $Admission = new Admission;
        $Admission->name =$name ;
        $Admission->mobile =$mobile;
        $Admission->email =$email;
        $Admission->course =$course;
        $Admission->score =$score;
        $Admission->state =$state;
        if ($Admission->save()) {
            $data = ['name'=>$name, 'mobile'=>$mobile, 'email'=>$email, 'course'=>$course, 'score'=>$score, 'state'=>$state];
           $user['to']='info@iknowledgeindia.com';
           Mail::send('mail_admission', $data, function($message) use ($user){
               $message->to($user['to']);
               $message->subject('New admission Enquiry');
           });
           Session::flash('status','alert-success');
           Session::flash('admission_msg','Your Admission Query Summited we will contact soon...');
           return redirect('/');
        }
        else
        {
            Session::flash('status','alert-danger');
            Session::flash('admission_msg','Oh Something went Wrong Please try again');
            return redirect('/'); 
        }
    }
    public function contact(Request $req)
    {
        $req->validate([
            'name' => 'required|min:3',
            'mobile' => 'required|numeric|min:10',
            'email' => 'email'
        ]);
        $name=$req->input('name');
        $mobile =$req->input('mobile');
        $email =$req->input('email');
        $subject =$req->input('subject');
        $message =$req->input('message');
        $Admission = new Admission;
        $Admission->name = $name;
        $Admission->mobile = $mobile;
        $Admission->email = $email;
        $Admission->subject =  $subject;
        $Admission->message = $message;
        if ($Admission->save()) {
           $data = ['name'=>$name, 'mobile'=>$mobile, 'email'=>$email, 'subject'=>$subject, 'umessage'=>$message];
           $user['to']='info@iknowledgeindia.com';
           Mail::send('mail_query', $data, function($message) use ($user){
               $message->to($user['to']);
               $message->subject('New admission query');
           });
           Session::flash('status','alert-success');
           Session::flash('contact_msg','Your Admission Query Summited we will contact soon...');
           return redirect('/#Contact-Us');
        }
    }
}
