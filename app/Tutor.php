<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedule;
use App\Student;
use App\Message;
class Tutor extends Model
{

    protected $table = 'tutors';

    protected $fillable = ['name', 'email', 'password'];


    protected $hidden = ['password', 'remember_token'];



public function student(){

  return $this->hasMany(Student::class);
}


public function message(){

  return $this->hasMany(Message::class);
}

}
