<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function studentlist()
    {
        
        //$student=array();

        $students=student::all();

       // for($i=0; $i<10;$i++){
         //   $student=array(
           //     "name"=>"Student ".($i+1),
             //   "id"=>"00".($i+1),
               // "dob"=>"11-12-13"
            //);
            //$students[]=(object)$student;
        //}

        //return view('stu.student')->with('students',$students);
        //return view('stu.student')->with('students',$students);

        return $students;

        //return 'good';
    }

/*
    public function studentcreat()
    {
        return view('stu.studentcreat');
    }
*/
    public function studentcreatsubmit(Request $request)
    {
        
            $student=new Student();
            $student->name=$request->name;
            $student->student_id=$request->id;
            $student->dob=$request->dob;
            $student->save();

            return 'successful';

        return "ok";
       
    }

public function studentEdit(Request $request)
{
    $student=Student::where('id', $request->id)->first();

    return view('stu.studentEdit')->with('student',$student);
}

public function studentEditsubmit(Request $request)
    {
        $student=Student::where('id', $request->id)->first();
        $student->name=$request->name;
        $student->student_id=$request->student_id;
        $student->dob=$request->dob;
        $student->save();

        return response()->json(["msg"=>"Updated Successfully"],200);

    }




    public function studentDelete(Request $request){
        $student=Student::where('id', $request->id)->first();
        $student->delete();

        return redirect()->route('studentlist');

    }
}
