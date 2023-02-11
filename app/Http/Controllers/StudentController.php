<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\student;
class StudentController extends Controller
{
    //
    public function firebaseCM(){

        return view("firebase");
    }
    public function displayform(){
        return view('studentform');
    }
    function studentslist () {
        return view('studentview');
    }
    public function index(){
        //$student = student::all();

        $student = DB::select('select * from student');
        return view('studentview',['student'=>$student]);
    }

    public function index2(){
        return student::all();
    }

    public function edit($id){

        $student= DB::select('select * from student where id = ?', [$id]);
        return view('studentedit',['student'=>$student]);
    }

    public function update_data(Request $request,$id){
        $student_fname = $request->input('stud_fname');
        $student_lname = $request->input('stud_lname');
        $student_mobile = $request->input('stud_mobile');
        $student_course = $request->input('stud_course');
        $student_address = $request->input('stud_address');

        DB::update("update student set stud_fname=? ,stud_lname=? ,stud_mobile=? ,stud_course=? ,stud_address=? where id= ?"
        ,[$student_fname,$student_lname,$student_mobile,$student_course,$student_address,$id]);

        // return $this->index();
        return redirect('studentlist')->with('update_success','Student updated with success');

    }

    public function delete($id){
        DB::delete('delete from student where id = ?', [$id]);
        return redirect('studentlist')->with('delete_success','Student deleted with success');
    }

    public function save(Request $request){
        $student_fname = $request->input('stud_fname');
        $student_lname = $request->input('stud_lname');
        $student_mobile = $request->input('stud_mobile');
        $student_course = $request->input('stud_course');
        $student_address = $request->input('stud_address');

        DB::insert("insert into student(stud_fname,stud_lname,stud_mobile,stud_course,stud_address) values(?,?,?,?,?)"
        ,[$student_fname,$student_lname,$student_mobile,$student_course,$student_address]);
        return redirect('student')->with('success','data saved');

    }
}
