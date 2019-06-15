<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;
use App\Category;
use App\Post;
use App\Tag;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
 // public function __construct()
  //{
    //  $this->middleware(['auth','verified']);
 // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('welcome');
    }
    
    public function dashboard()
    {
        $cats=Category::all();
        $posts=Post::all();
        $tags=Tag::all();
        $users=User::all();
return view('dashboard')
        ->with('user_count',$users->count())
        ->with('post_count',$posts->count())
          ->with('tag_count',$tags->count())
          ->with('cat_count',$cats->count());

  
      }
}
