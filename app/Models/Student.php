<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faculty; 

class Student extends Model
{
    
    use HasFactory;
    protected $table = 'student';

    protected $fillable = ['name' ,'faculty_id', 'age' , 'photo'  ] ; 

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
    public function get_results($id){
        $first = Faculty::where('id', $id)->first();
    
    
        return $first->name ;
    }
    
}
