<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class,'center_doctor','center_id','doctor_id');
    }
}
