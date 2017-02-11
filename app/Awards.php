<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Awards extends Model
{
	protected $fillable = [
		'student_id',
	    'award_description_short',
	    'award_description',
        'issued_by',
        'award_date'
	];

	public function getawardDateAttribute($date) {
        return Carbon::parse($date)->format('d-m-Y');
    }

    public function setawardDateAttribute($date) {
        $this->attributes["award_date"] = Carbon::parse($date)->toDateString();
    }

    public function student() {
    	return $this->belongsTo('App\Students');
    }
}
