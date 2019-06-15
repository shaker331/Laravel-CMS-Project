<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\category;
use App\Tag;
use Auth;
use User;

class postsController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("auth");
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts=Post::all();
       return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $cats=category::all();
        if( $cats->count()==0){
            return view('categories.create');
        }
        $tags=Tag::all();
        
        if( $tags->count()==0){
            return view('tags.create');
        }
        return view("posts.create",compact('cats','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$this->validate($request,[
'title' => ['required', 'string', 'max:255', 'unique:posts'],
"content"=>"required",
"cat_id"=>"required",
"featured"=>"required|image",
"tags"=>"required",

]) ;
$featured=$request->featured;
$featured_name=time().$featured->getClientOriginalName();
$featured1=$featured->move('upload/posts',$featured_name);
$post= Post::create([
   "title"=> $request->title,
   "content"=>$request->content,
   "category_id"=>$request->cat_id,
   "featured"=>$featured1,
   "slug"=>str_slug($request->title),
   "user_id" =>Auth::id(),
]);
$post->save();
$post->tags()->attach($request->tags);
return redirect('/posts');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts=Post::find($id);
        $cats=Category::all();
        $tags=Tag::all();
        return view('posts.edit',compact('posts','cats','tags'));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
$this->validate($request,[
    "title" => "required",
    "content"=>"required",
    "cat_id"=>"required",
    "tags"=>"required"

    ]) ;
    $posts=Post::find($id);
    $cats=Category::find($id);
    $posts->title= $request->title;
    $posts->content=$request->content;
    $posts->category_id=$request->cat_id;
       $posts->slug=str_slug($request->title);
    
    $posts->save();
    $posts->tags()->sync($request->tags);

    return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $posts=Post::find($id);
        $posts->delete();
        return back();
    }
}
