<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function record()
    {
        return $this->belongsTo(Record::class);
    }
    public function report()
    {
        return $this->hasOne(Report::class);
    }
}
