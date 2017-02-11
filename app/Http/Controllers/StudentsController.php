<?php

namespace App\Http\Controllers;

use Request;
use App\Students;
use App\Http\Requests\StudentsRequest;
use Image;
use Session;

class StudentsController extends Controller
{
    public function show($student) {
        $students = Students::find($student);
        return view('students.student', compact('students'));
    }

    public function index() {
        $students = Students::all()->sortByDesc("id");
        return view('students.show')->with('students', $students);
    }

    public function create() {
    	return view('students.create');
    }

    public function store(StudentsRequest $request) {
    	$students = new Students();
    	$students->fill($request->all());
        if($request->hasFile('photo')) {
            $dest_t = 'thumbnail';
            $dest = 'uploads';
        	$file = $request->file('photo');
            $original_filename = $file->getClientOriginalName();
            $new_filename = rand(1000, 1000000) . "_" . rand(1000, 1000000) . "_" . rand(1000, 1000000) . "_" . $original_filename;
            $new_t_filename = "thumb_" . $new_filename;
            $get_thumbnail = Image::make($file->getRealPath());
            $get_thumbnail->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($dest_t.'/'.$new_t_filename);
        	$students->photo = $new_filename;
        	$file->move($dest, $new_filename);
        	if($students->save()) {
                Session::flash('success', 'Student was successfully created');
                return redirect('/students');
            } else {
                Session::flash('error', 'Something went wrong');
                return redirect('/students');
            }
        } else {
            if($students->save()) {
                Session::flash('success', 'Profile was successfully created');
                return redirect('/students');
            } else {
                Session::flash('error', 'Something went wrong');
                return redirect('/students');
            }
        }
    }
}
