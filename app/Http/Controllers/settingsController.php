<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
class settingsController extends Controller
{
public function index(){
$settings=Setting::first();
return view('settings.setting',compact('settings'));




}

public function update(Request $request){
    
    $settings=Setting::first();
    $settings->blog_name=$request->blog_name;
    $settings->phone=$request->phone;
    $settings->blog_email=$request->blog_email;
    $settings->address=$request->address;
    $settings->save();
    return back();

    }
    
public function store(Request $request){
    $settings= Setting::create([
       "blog_name"=> $request->blog_name,
       "phone"=>$request->phone,
       "blog_email"=>$request->blog_email,
       "address"=>$request->address,
    ]);
    $settings->save();
    return back();

    }
}
