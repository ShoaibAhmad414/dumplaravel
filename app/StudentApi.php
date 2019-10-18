<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentApi extends Model
{
    protected $table = 'student';

    protected $fillable = ['fname','lname','email','passowrd'];
}
