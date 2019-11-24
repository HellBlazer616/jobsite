<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = [
        'job_title', 'job_description', 'salary', 'location', 'country'
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
