<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;


    // protected $guarded = [];
    // protected $fillable = [
    //     'name', 'password', 'email', 'phone', 'location'];

    protected $hidden = ['password', 'remember_token'];
    protected $appends = ['photo'];

    public function getPhotoUrlAttribute()
    {
        if ($this->foto !== null) {
            return url('media/user/' . $this->id . '/' . $this->foto);
        } else {
            return url('media-example/no-image.png');
        }
    }

    public function roles(){
        return $this->belongsToMany('App\Role');
    }    


    public function hasAnyRoles($roles){

        if($this->roles()->whereIn('name', $roles)->first()){

            return true;
        }

        return false;


    }



    public function hasRole($role){

        if($this->roles()->where('name', $role)->first()){

            return true;
        }

        return false;


    }


    


}
