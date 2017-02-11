<?php

namespace App\Http\Controllers;

use Request;
use App\Awards;
use App\Http\Requests\AwardsRequest;
use Session;

class AwardsController extends Controller
{
    public function create($id) {
    	return view('awards.create')->with('id', $id);
    }

    public function store(AwardsRequest $request) {
    	$award = new Awards;
    	$award->fill($request->all());
    	if($award->save()) {
                Session::flash('success', 'Award was successfully added');
                return redirect('/students/' . $request->student_id);
            } else {
                Session::flash('error', 'Something went wrong');
                return redirect('/students/' . $request->student_id);
            }
    }
}
