<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtoController extends Controller
{


    public function index(){


        return response()->json('test');


    }


    public function testData(){


      $redis = \LRedis::connection();


      $redis->publish('message', 'TestMessage');


    }
}
