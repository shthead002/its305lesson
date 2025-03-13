<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suffix extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    
    public function students()
    {
        return $this->hasMany(Student::class, 'suffix_id', 'id');
    }
}
