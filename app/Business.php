<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table="businesses";

    protected $fillable = ['name', 'phone', 'email', 'location'];

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }




    public function fingerprints()
    {
        return $this->hasMany(Fingerprint::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
