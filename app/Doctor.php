<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
    public function record()
    {
        return $this->belongsTo(Record::class);
    }
}
