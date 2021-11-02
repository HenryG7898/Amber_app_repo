<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject_nm',
        'cost_amt',
    ];
    public function choices(){
        return $this->hasMany(Subject_choice::class);
    }

}
