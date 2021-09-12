<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function hello()
    {
        return view('message.hello');
    }

    public function var()
    {
        $data = [
            'variable' => 'Hello from MessageController',
        ];
        return view('message.var', $data);
    }

    public function word($msg)
    {
        $data = [
            'msg' => $msg,
        ];
        return view('message.word', $data);
    }

    public function word2($name, $msg)
    {
        $data = [
            'name' => $name,
            'msg' => $msg,
        ];
        return view('message.word2', $data);
    }

}
