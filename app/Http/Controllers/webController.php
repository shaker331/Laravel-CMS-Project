<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\Tag;
use auth;
use App\User;
use App\Profile;
use Newsletter;

class webController extends Controller
{
  

    public function index()
    {
      $setting=Setting::first();
      $cats=Category::all();
      $posts=Post::all();
      $laravel=Category::find(1);
      $android=Category::find(3);
      $paython=Category::find(2);
      $cricket=Category::find(4);
      $catcount=$laravel->posts()->count();
      $catcount1=$android->posts()->count();
      $catcount2=$paython->posts()->count();
      $catcount3=$cricket->posts()->count();

        return view('home',compact('setting','cats','posts','laravel','catcount','catcount1','catcount2','catcount3','android','paython','cricket'))
        ->with('first_post',Post::orderBy('created_at','desc')->first())
        ->with('second_post',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
        ->with('third_post',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
        ->with('setting',Setting::find(1))
        ->with('title','shaker Sports')
        ->with('tags',Tag::all());
 
       
    }
    
    public function store(Request $request)
    {
         
  $setting=Setting::first();
  $cats=Category::all();
  $posts=Post::all();
  $tags=Tag::all();
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            return back()->with('status', 'Thanks For Subscribe');
        }
        return redirect()->back()->with('setting',$setting)->with('status', 'Sorry! You have already subscribed ');
            
    }
    
public function about()
{
      
  $setting=Setting::first();
  $cats=Category::all();
  $posts=Post::all();
  $tags=Tag::all();
    return view('about',compact('setting','cats','posts','tags'))->with('title','shaker Sports')
    ;
}
public function privacy()
{
      
  $setting=Setting::first();
  $cats=Category::all();
  $posts=Post::all();
  $tags=Tag::all();
    return view('privacy',compact('setting','cats','posts','tags'))->with('title','shaker Sports')
    ;
}


public function contact()
{
      
  $setting=Setting::first();
  $cats=Category::all();
  $posts=Post::all();
  $tags=Tag::all();
    return view('contact',compact('setting','cats','posts','tags'))->with('title','shaker Sports');
}
public function allPosts()
{

  $setting=Setting::first();
  $cats=Category::all();
  $posts=Post::orderby('id','desc')->paginate(4);
  $tags=Tag::all();
  
  $laravel=Category::find(1);
  $android=Category::find(3);
  $paython=Category::find(2);
  $cricket=Category::find(4);
  $catcount=$laravel->posts()->count();
  $catcount1=$android->posts()->count();
  $catcount2=$paython->posts()->count();
  $catcount3=$cricket->posts()->count();

    return view('posts.allposts',compact('setting','cats','posts','tags','laravel','catcount','catcount1','catcount2','catcount3','android','paython','cricket'))
    ->with('title','shaker Sports') ;
}
    
      public function showPost($slug)
    {
      $setting=Setting::first();
      $cats=Category::all();
      $post=Post::where('slug',$slug)->first();
    $next_p=Post::where('id','>',$post->id)->min('id');
    $previous_p=Post::where('id','<',$post->id)->max('id');
    $next=Post::find($next_p);
    $previous=Post::find($previous_p);
    
    $laravel=Category::find(1);
    $android=Category::find(3);
    $paython=Category::find(2);
    $cricket=Category::find(4);
    $catcount=$laravel->posts()->count();
    $catcount1=$android->posts()->count();
    $catcount2=$paython->posts()->count();
    $catcount3=$cricket->posts()->count();

      return view('posts.show',compact('setting','cats','next','previous','laravel','catcount','catcount1','catcount2','catcount3','android','paython','cricket'))
     
        ->with('post',$post)
        ->with('title','shaker Sports')
        ->with('tags',Tag::all());

    }
    
    public function showCategory($id)
    {

      $setting=Setting::first();
      $catss=Category::find($id);

      $laravel=Category::find(1);
      $android=Category::find(3);
      $paython=Category::find(2);
      $cricket=Category::find(4);
      $catcount=$laravel->posts()->count();
      $catcount1=$android->posts()->count();
      $catcount2=$paython->posts()->count();
      $catcount3=$cricket->posts()->count();
  
        return view('categories.show',compact('setting','catss','laravel','catcount','catcount1','catcount2','catcount3','android','paython','cricket'))
       
        ->with('tags',Tag::all())
        ->with('setting',Setting::find(1))
        ->with('title','shaker Sports')

        ->with('cats',Category::all())
;
        

    }
    
    public function showTag($id)
    {

      $setting=Setting::first();
      $tagss=Tag::find($id);

      $laravel=Category::find(1);
      $android=Category::find(3);
      $paython=Category::find(2);
      $cricket=Category::find(4);
      $catcount=$laravel->posts()->count();
      $catcount1=$android->posts()->count();
      $catcount2=$paython->posts()->count();
      $catcount3=$cricket->posts()->count();

        return view('tags.show',compact('setting','tagss','laravel','catcount','catcount1','catcount2','catcount3','android','paython','cricket'))
        ->with('setting',Setting::find(1))
        ->with('cats',Category::all())
        ->with('title','shaker Sports')
        ->with('tags',Tag::all())

;
        

    }
    
    public function search(Request $request)
    {
      $setting=Setting::first();
      $cats=Category::all();
      $posts=Post::where('title','like','%' . request('search') . '%')->get();
      
      $laravel=Category::find(1);
      $android=Category::find(3);
      $paython=Category::find(2);
      $cricket=Category::find(4);
      $catcount=$laravel->posts()->count();
      $catcount1=$android->posts()->count();
      $catcount2=$paython->posts()->count();
      $catcount3=$cricket->posts()->count();
      return view('result',compact('setting','cats','posts','laravel','catcount','catcount1','catcount2','catcount3','android','paython','cricket'))
      ->with('query',request('search'))
      ->with('tags',Tag::all())
      ->with('title','shaker Sports')

      ;

}

public function users($id)
{
  $setting=Setting::first();
  $cats=Category::all();
  $posts=Post::all();
  $tags=Tag::all();
  $user=User::find($id);
      
  $laravel=Category::find(1);
  $android=Category::find(3);
  $paython=Category::find(2);
  $cricket=Category::find(4);
  $catcount=$laravel->posts()->count();
  $catcount1=$android->posts()->count();
  $catcount2=$paython->posts()->count();
  $catcount3=$cricket->posts()->count();

    return view('users.users',compact('setting','cats','posts','tags','laravel','user','catcount','catcount1','catcount2','catcount3','android','paython','cricket'))
   ;
}

}
