<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;
use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class testEmailController extends Controller
{
    public function testEmail(){

        $data = ['message' => 'This is a test!'];

        Mail::to('shaker3318674@gmail.com')->send(new TestEmail($data));
        return back();
    }
}
