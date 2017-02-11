<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Students extends Model
{
    protected $fillable = [
    	'name',
    	'middle_name',
    	'surname',
    	'date_of_birth',
    	'nationality',
    	'home_town',
    	'current_address',
    	'primary_school',
    	'high_school',
    	'college',
    	'photo'
    ];

    public function getdateOfBirthAttribute($date) {
        return Carbon::parse($date)->format('d-m-Y');
    }

    public function setdateOfBirthAttribute($date) {
        $this->attributes["date_of_birth"] = Carbon::parse($date)->toDateString();
    }

    public function awards() {
        return $this->hasMany('App\Awards', 'student_id');
    }
}
