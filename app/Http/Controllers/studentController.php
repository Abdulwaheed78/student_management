<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\teacher;

class studentController extends Controller
{
    function index()
    {
        $data = Student::with('teacher')->get();
        return view('admin.student.manage')->with('data', $data);
    }

    function show()
    {
        $data = teacher::all();
        return view('admin.student.add')->with('data', $data);
    }

    function create(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required'],
            'class' => ['required'],
            'teacher_id' => ['required', 'numeric'],
            'yearly_fees' => ['required', 'numeric'],
            'admission_date' => ['required']
        ]);
        $data = new student();
        $data::create($validator);
        return redirect()->route('addstudent')->with('success', 'Student Created successFully');
    }

    function edit($id)
    {
        $data = student::with('teacher')->find($id);
        $data1 = teacher::all();

        if ($data) {
            return view('admin.student.edit', compact('data', 'data1'));
        } else {
            return redirect()->route('managestudent')->with('error', 'Student with the given ID not found');
        }
    }

    function update(Request $request, $id)
    {
        $validator = $request->validate([
            'name' => ['required'],
            'class' => ['required'],
            'teacher_id' => ['required', 'numeric'],
            'yearly_fees' => ['required', 'numeric'],
            'admission_date' => ['required']
        ]);

        // Find the student by ID
        $data = student::find($id);
        if ($data) {
            $data->update($validator);
            return redirect()->route('managestudent')->with('success', 'student Updated successfully');
        } else {
            return redirect()->route('managestudent')->with('error', 'student with the Given Id Not Found');
        }
    }

    function delete($id)
    {
        $data = student::find($id);
        if ($data) {
            $data->delete();
            return redirect()->route('managestudent')->with('success', 'student Deleted Successfully');
        } else {
            return redirect()->route('managestudent')->with('error ', 'student With the Given Id Not Found');
        }
    }
}
