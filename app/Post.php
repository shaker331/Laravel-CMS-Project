<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey ='id';
    
    protected $fillable = [
        'title', 'content', 'category_id','featured','slug' ,'user_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    public function getFeatured($featured)
    {
        return asset($featured);
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
