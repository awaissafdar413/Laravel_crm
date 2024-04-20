<?php

namespace App\Http\Controllers;

use App\Mail\webmail;
use App\Jobs\webmailjob;
use App\Models\template;
use App\Models\emaildata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class homeController extends Controller
{
    public function dashboard()
    {
        $templates = template::where('id', 1)->get();
        return view('dashboard', compact('templates'));
    }
    public function allemailaddress()
    {
        $datas = emaildata::paginate(25);
        return view('allemailaddress', compact('datas'));
    }
    public function alltemplate()
    {
        $datas = template::all();
        return view('alltemplate', compact('datas'));
    }
    public function templatedelete($id)
    {
        $datas = template::where('id', $id)->delete();
        return redirect()->back();
    }
    public function deleteallemailaddress()
    {
        emaildata::all()->each(function ($email) {
            $email->delete();
        });
        return redirect()->back();
    }
    public function saveemailaddress(Request $request)
    {
        $request->validate([
            'emails'=>'required'
        ]);
        $emails = $request->input('emails');
        $emailArray = explode(',', $emails);
        foreach ($emailArray as $email) {
            $trimmedEmail = trim($email);
            emaildata::create(['email' => $trimmedEmail]);
        }
        // return redirect()->back()->with('success', 'Emails stored successfully!');
        return redirect('/allemailaddress')->with('success', 'Emails stored successfully!');
    }
    public function templatestructure(Request $request)
    {
        // $data = template::updateOrcreate(
        //     ['id' => 1],
        //     [
        //         'template' => $request->input('content'),
        //     ]
        // );
        $template=new template;
        $template->subject=$request->input('subject');
        $template->template=$request->input('content');
        $template->save();
        return redirect()->back();
    }
    public function email()
    {
        $datas = template::where('id', 1)->get();
        return view('template.email', compact('datas'));
    }
    public function emailsend($template)
    {
        $emaildatas = emaildata::all();
        $subjectData = template::find($template); // Replace with your model and ID retrieval logic
        // Fetch template using ID or other criteria
        foreach ($emaildatas as $emaildata) {
            dispatch(new webmailjob($emaildata->email,$template, $subjectData))->delay(now()->addSeconds(20));
        }
        return redirect()->back()->with('success', 'Email sent successfully!');
    }
    // Mail::to('awaissafdar111@gmail.com')->send(new webmail());
}
