<?php

namespace App\Http\Controllers;
use App\Http\Middleware\EncryptCookies;

use Illuminate\Http\Request;

class HhController extends Controller
{
            public function index(){
//                $except = [ 'cookie_name', ];

//                return '123';

             return response()->file('./ad/images/mws-logo.png');
//                return response($content)
//                    ->header('Content-Type', $type)
//                    ->cookie('name', 'zhang', 1);
            }

}
