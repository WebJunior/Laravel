<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function tag() {
        return 'this is tab tag';
    }

    function blog() {
        return 'this is tab blog';
    }

    function category() {
        return 'this is tab category';
    }
}

