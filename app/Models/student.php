<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class student extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'class',
        'teacher_id',
        'yearly_fees',
        'admission_date'
    ];


    // Define the relationship to the Teacher
    public function teacher()
    {
        return $this->belongsTo(teacher::class);
    }
}
