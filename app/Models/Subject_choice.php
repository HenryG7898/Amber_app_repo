<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject_choice extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'status',
        'year_of_exam'
    ];

    public function students(){
        return $this->belongsTo(Student::class,'student_id','id');
    }

    Public function subjects(){
        return $this->belongsTo(Subject::class,'subject_id','id');
    }

}
