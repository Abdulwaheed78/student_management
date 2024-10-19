<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class teacher extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'education',
        'dob',
        'about'
    ];
    // Define the relationship to the Students
    public function students()
    {
        return $this->hasMany(student::class);
    }
}
