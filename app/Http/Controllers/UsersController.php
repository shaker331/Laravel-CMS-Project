<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $profile=Profile::all();
        return view('users.index',compact('users','profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
    "name" => "required",
    "email"=>"required",
    
    ]) ;
    //$user=User::all();
 //   if ($request->email == $user->email) {
    //   return view('this email regiterd');}
 //   else
  //  {
        
    $user= User::create([
        "name"=> $request->name,
        "email"=>$request->email,
        "password"=>bcrypt('password'),
     ]);
   // }
$profile=Profile::create([
    'user_id'=>$user->id,
    'avatar'=>'upload\avatar\1.png'
]);
    return redirect('/users');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    public function admin($id)
    {
        $users=User::find($id);
        $users->admin=1;
        $users->save();
        return back();
    }
    
    public function notAdmin($id)
    {
       
        $users=User::find($id);
        $users->admin=0;
        $users->save();
        return back();
    }
}
