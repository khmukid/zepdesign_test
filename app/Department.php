<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'department';
    public $timestamps = true;

    protected $fillable = array('dep_name', 'dep_code', 'dep_description');
}
