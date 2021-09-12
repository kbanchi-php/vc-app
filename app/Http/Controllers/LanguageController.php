<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = ['HTML', 'CSS', 'JavaScript', 'PHP'];
        $data = [
            'languages' => $languages,
        ];
        return view('language.index', $data);
    }
}
