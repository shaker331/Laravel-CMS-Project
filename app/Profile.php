<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    protected $fillable = [
        'avatar', 'user_id', 'facebook','twitter','about',
    ];

  
    public function user(){
        return  $this->belongsTo('App\User');
    }
    
    public function getProfile($avatar)
    {
        return asset($avatar);
    }
}
