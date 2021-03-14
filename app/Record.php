<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }
    public function patient()
    {
        return $this->hasOne(Patient::class);
    }
    public function hospital()
    {
        return $this->hasOne(hospital::class);
    }
}
