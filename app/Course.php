<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'course';
    public $timestamps = true;

    protected $fillable = array('course_name', 'course_code', 'course_credit', 'course_description');


}
