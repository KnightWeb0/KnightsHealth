<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;



       // a doctor has many paitnets relationship

       public function patients(){

          return $this->hasMany(Patient::class);
       }


}
