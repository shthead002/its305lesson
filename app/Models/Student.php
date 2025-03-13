<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_no',
        'first_name',
        'middle_name',
        'last_name',
        'suffix_id',
        'contact_no',
        'email',
        'address',
        'year_level_id',
        'status_id'
    ];

    public function suffix()
    {
        return $this->belongsTo(Suffix::class, 'suffix_id', 'id');
    }
    public function year_level()
    {
        return $this->belongsTo(YearLevel::class, 'year_level_id', 'id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
