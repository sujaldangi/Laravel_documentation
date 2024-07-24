<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendCustomEmail($to, $userMail, $userName)
    {
        $data = ['name' => $userName, 'mail' => $userMail];
        $user['to'] = $to;
        if ($user['to'] != $userMail) {
            $is_mail_sent = Mail::send('mail.mail', $data, function ($message) use ($user) {
                $message->to($user['to']);
                $message->subject("New user registred");
            });
        } elseif ($user['to'] == $userMail) {

            $is_mail_sent = Mail::send('mail.mail-user', $data, function ($message) use ($user) {
                $message->to($user['to']);
                $message->subject("registred");
            });
        }
    }
}
