<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }
    public function record()
    {
        return $this->belongsTo(Record::class);
    }
}
