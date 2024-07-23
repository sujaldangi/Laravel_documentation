<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LaravelMailSender extends Controller
{
    public function send()
    {
        $data = ['name' => 'sujal', 'data' => 'hello sujal'];
        $user['to'] = 'sujalinfostride@gmail.com';

        Mail::send('mail', $data, function ($message) use ($user) {
            $message->to($user['to']);
            $message->subject("hello dev");
        });

        
    }
}

