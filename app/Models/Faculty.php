<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student; 

class Faculty extends Model
{
    use HasFactory;

    protected $table = 'faculty';

    protected $fillable = ['name'];

    public function students(){
        return $this->hasMany(Student::class);
    }
}
