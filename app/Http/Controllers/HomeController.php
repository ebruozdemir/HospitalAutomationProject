<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Appointment;

use App\Models\Announcement;

use  App\Models\Message;
class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {  
                $doctor= doctor::all();
                $announcement=announcement::all();

                return view('user.home', compact('doctor','announcement'));
                
            }
            else
            {
                return view('admin.home');
            }

        }
        else
        {
            return redirect()->back();
        }

    }
    
     public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
         $doctor=doctor::all();
        
         


           return view('user.home',compact('doctor'));
    
        }

    
    }

    public function index2()
    {
        if(Auth::id())
        {
            //return redirect('home');
        }
        else
        {
         $announcement=announcement::all();
        
         


           return view('user.home',compact('announcement'));
    
        }

    
    }

    public function appointment(Request $request)
    {
        $data=new appointment;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->phone=$request->number;

        $data->speciality=$request->department;

        $data->doctor=$request->doctor_name;

        $data->date=$request->date;

        $data->message=$request->message;

        $data->status='In progress';

        if(Auth::id())
        {
            
        $data->user_id=Auth::user()->id;

        }

        $data->save();

        return redirect()->back()->with('message','Appointment request successfully');


    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->get();
            return view('user.my_appointment',compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }

    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);

        $data->delete();

        return redirect()->back();

    }


    public function contact(Request $request)
    {
        $data=new message;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->phone=$request->phone;

        $data->message=$request->message;

        $data->admin_status='New';

        if(Auth::id())
        {
            
           $data->user_id=Auth::user()->id;

        }

        $data->save();

        return redirect()->back()->with('message','Message send successfully');
    }


    public function mymessages()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $message=message::where('user_id',$userid)->get();
            return view('user.my_messages',compact('message'));
        }
        else
        {
            return redirect()->back();
        }

    }

    public function answer($id)
    {
        $data=message::find($id);
        return view('user.answer',compact('data'));

    }
  public function doctors(){
    $data=doctor::all();
    return view('user.doctors',compact('data'));
  }

  public function contactform(){
    $message=message::all();
    return view('user.contactform',compact('message'));
  }
 
  public function latestnews(){
    $data=announcement::all();
    return view('user.latestnews',compact('data'));
  }
  
 
 
   

    
        



       
    }



   
   
    


   


   
   










