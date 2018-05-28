<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(){

        $url_data = [
          array(
              'title' => 'DKA-Develop',
              'url' => 'https://dka.test'
          ),array(
              'title' => 'Youtube',
              'url' => 'https://youtube.com'
          ),
        ];

//        dd(json_encode($url_data));

        return view('start' , [
            'url_data' => $url_data
        ]);
    }
}
