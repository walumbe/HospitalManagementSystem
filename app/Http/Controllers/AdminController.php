<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function addView()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        // $formFields = $request->validate([

        // ]);

        $doctor = new Doctor(); 

        $image = $request->file;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage', $imagename);

        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor added Successfully!');

    }
}
