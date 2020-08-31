<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table="visits";

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function scopeToday($query)
{
    // Change today by $activeSchoolYear if necessary
    return $query->whereDate('created_at', '=', today());
}
}
