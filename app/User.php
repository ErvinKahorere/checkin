<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable

{
     // protected $guarded = [];
     protected $fillable = [
        'name', 'password', 'email', 'phone', 'location'];


        protected $hidden = ['password', 'remember_token'];
    //    protected $appends = ['photo'];
    
        // public function getPhotoUrlAttribute()
        // {
        //     if ($this->foto !== null) {
        //         return url('media/user/' . $this->id . '/' . $this->foto);
        //     } else {
        //         return url('media-example/no-image.png');
        //     }
        // }
        public function getRememberToken()
        {
            return $this->remember_token;
        }
        

        public function setRememberToken($value)
        {
            $this->remember_token = $value;
        }
        
        public function getRememberTokenName()
        {
            return 'remember_token';
        }

        public function getAuthIdentifierName(){

        }

        public function getAuthIdentifier(){

        }

        public function getAuthPassword(){

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


        public function visits()
        {
          return $this->hasMany(Visit::class);
        }


        public function businesses()
        {
          return $this->hasMany(Business::class);
        }



    

}
