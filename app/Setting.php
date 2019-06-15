<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
   
    protected $fillable = [
        'blog_name', 'blog_email', 'phone', 'address',
    ];
}
