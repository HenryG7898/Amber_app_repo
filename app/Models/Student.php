<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

//    protected $table ='students';
    protected $fillable = [
        'Firs_nm',
        'Last_nm',
        'DOB',
        'Class',
        'Phone_nb',
        'Email',
        'Gender'
    ];

    public function subjectchoice(){
        return $this->hasMany(Subject_choice::class,'subject_id','id');
    }
}
