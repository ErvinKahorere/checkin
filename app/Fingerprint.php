<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fingerprint extends Model
{


    protected $table="fingerprints";


    public function business()
    {
        return $this->belongsTo(Business::class);
    }

}
