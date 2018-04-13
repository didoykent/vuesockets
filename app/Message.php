<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\Tutor;
class Message extends Model
{
    protected $table = 'messages';


    protected $fillable = ['message', 'avatar', 'name'];


    protected $hidden = ['remember_token'];


    public function student(){

      return $this->belongsTo(Student::class);

    }

    public function tutor(){

      return $this->belongsTo(Tutor::class);
    }
}
