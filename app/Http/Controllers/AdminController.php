<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointment;

use App\Models\User;

use App\Models\Announcement;

use App\Models\Message;


class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();

       $request->file->move('doctorimage',$imagename);
       $doctor->image=$imagename;

       $doctor->name=$request->name;
       $doctor->email=$request->email;
       $doctor->phone=$request->number;
       $doctor->speciality=$request->speciality;
       $doctor->room=$request->room;

       $doctor->save();

       return redirect()->back()->with('message','Doctor registered successfully');

    }

    public function showappointment()
    {
        $data=appointment::all();
        return view('admin.showappointment',compact('data'));
    }

    public function approved($id)
    {
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();


    }

    public function canceled($id)
    {
        $data=appointment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();
    }

    public function showdoctor()
    {
        $data= doctor::all();

        return view('admin.showdoctor',compact('data'));
    }

    public function deletedoctor($id)
    {
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data= doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }

    public function editdoctor( Request $request , $id)
    {
        $doctor=doctor::find($id);
        $doctor->name=$request->name;
        $doctor->email=$request->email;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
       $image=$request->file;

        if($image)
       {
       $imagename=time().'.'.$image->getClientOriginalExtension();
        
       $request->file->move('doctorimage',$imagename);

       $doctor->image=$imagename;

       }
       $doctor->save();
       return redirect()->back()->with('message','Doctor information updated successfully.');
    }

    public function showuser()
    {
            $data = User::where('usertype', 0)->get();
            
            return view('admin.showuser', compact('data'));
        
        
        }
       
    

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateuser($id)
    {
        $data= user::find($id);
        return view('admin.updateuser',compact('data'));
    }

    public function edituser(Request $request , $id)
    {
        $user= user::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;

        $user->save();
        return redirect()->back()->with('message','User information updated successfully');
    }

    public function noticeboard()
    {
        return view('admin.noticeboard');
    }

    /**
     * Summary of publish_annocunment
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function publish_annocunment(Request $request)
    {
         $announcement=new announcement;
         $announcement->title=$request->title;
         $announcement->message=$request->message;

         $announcement->save();
         return redirect()->back()->with('message','Announcement successfully published.');

    }

    public function showannouncement()
    {
        $data=announcement::all();
        return view('admin.showannouncement',compact('data'));
    }

    public function deleteannouncement($id)
    {
        $data=announcement::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function updateannouncement($id)
    {
        $data= announcement::find($id);
        return view('admin.updateannouncement',compact('data'));
    }

    public function editannouncement(Request $request , $id)
    {
        $announcement= announcement::find($id);
        $announcement->title=$request->title;
        $announcement->message=$request->message;
        

        $announcement->save();
        return redirect()->back()->with('message','Announcement information updated successfully');
    }


    public function showmessages()
    {
        $data=message::all();
        return view('admin.showmessages',compact('data'));
    }


 
    public function seen($id)
    {
        $data=message::find($id);
        $data->admin_status='Seen';
        $data->user_status='Seen';
        $data->save();
        return view('admin.seen',compact('data'));

    }

    public function answer_message(Request $request , $id)
    {
        $message= message::find($id);
        $message->answer=$request->answer;

        $message->save();
        return redirect()->back()->with('message','Message sent successfully');
    }

    public function add_user()
    {
        return view('admin.add_user');
    }
    
    public function upload_user(Request $request)
    {
        $user=new user;

       $user->name=$request->name;
       $user->email=$request->email;
       $user->phone=$request->number;
       $user->address=$request->address;
       $user->password = sha1($request->password);

       $user->save();

       return redirect()->back()->with('message','User registered successfully');

    }
   
   
    

        
     


    


   

    
  





}
