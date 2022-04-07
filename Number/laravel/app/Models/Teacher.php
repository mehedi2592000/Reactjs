<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{


    use HasFactory;
    protected $table='teacher';
    public $timestamps=false;

    public function assignedteacher()
    {
        
        return Course::where('teacherid', $this->id)->get();
    }

}
