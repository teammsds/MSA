<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=[
        'tm_number',
        'tm_name',
        'tm_coach',
        'tm_coachemail',
        'tm_coachphone',
        'school_id'
    ];

    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function player()
    {
        return $this->hasMany('App\Player');
    }
    //
}
