<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    public function parcel()
    {
        return $this->belongsTo(Parcel::class);
    }
}
