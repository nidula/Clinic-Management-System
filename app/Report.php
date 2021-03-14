<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function record()
    {
        return $this->BelongsTo(Record::class);
    }
}
