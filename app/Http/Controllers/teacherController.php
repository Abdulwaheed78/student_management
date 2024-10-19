<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class teacherController extends Controller
{

    function index()
    {
        $data = teacher::all();
        return view('admin.teacher.manage')->with('data', $data);
    }

    function show()
    {
        return view('admin.teacher.add');
    }

    function create(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:teachers,email'], // Correctly separated rules
            'education' => ['required'],
            'dob' => ['required'],
            'about' => ['nullable'] // Allow 'about' to be null
        ]);

        $data = new teacher();
        $data::create($validator);
        return redirect()->route('addteacher')->with('success', 'Teacher Created successFully');
    }

    function edit($id)
    {
        $data = teacher::find($id);
        if ($data) {
            return view('admin.teacher.edit')->with('data', $data);
        } else {
            return redirect()->route('manageteacher')->with('error ', 'Teacher With the Given Id Not Found');
        }
    }

    function update(Request $request, $id)
    {
        $validator = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:teachers,email,' . $id],
            'education' => ['required'],
            'dob' => ['required'],
            'about' => ['nullable'] // Allow 'about' to be null
        ]);

        // Find the teacher by ID
        $data = teacher::find($id);
        if ($data) {
            $data->update($validator);
            return redirect()->route('manageteacher')->with('success', 'Teacher Updated successfully');
        } else {
            return redirect()->route('manageteacher')->with('error', 'Teacher with the Given Id Not Found');
        }
    }

    function delete($id)
    {
        $data = teacher::find($id);
        if ($data) {
            $data->delete();
            return redirect()->route('manageteacher')->with('success', 'Teacher Deleted Successfully');
        } else {
            return redirect()->route('manageteacher')->with('error ', 'Teacher With the Given Id Not Found');
        }
    }
}
