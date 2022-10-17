<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('student.list', ['students' => $students]);
    }
    public function create(){
        return view('student.add');
    }
    public function list(Request $request){
        $newPost = Student::create([
            'fulname' => $request->fullname,
            'birthday' => $request->birthday,
            'address' => $request->address
        ]);
        return redirect('student/' . $newPost->id. '/edit');
    }
    public function show(Student $student){

    }
    public function edit(Student $student){
        return view('student.edit', ['student' => $student,]);
    }
    public function update(Request $request, Student $student){
        $student->update([
            'fulname' => $request->fullname,
            'birthday' => $request->birthday,
            'address' => $request->address
        ]);
        return redirect('student/'. $student->id. '/edit');
    }
    public function destroy(Student $student){
        $student->delete();
        return redirect('student/');
    }
}
