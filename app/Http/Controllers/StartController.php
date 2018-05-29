<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {

        $url_data = [
            array(
                'title' => 'DKA-Develop',
                'url' => 'https://dka.test'
            ), array(
                'title' => 'Youtube',
                'url' => 'https://youtube.com'
            ),
        ];

//        dd(json_encode($url_data));

        return view('start', [
            'url_data' => $url_data
        ]);
    } //index

    public function getJson()
    {

        return [
            array(
                'title' => 'Google',
                'url' => 'https://google.com'
            ), array(
                'title' => 'Yandex',
                'url' => 'https://yandex.com'
            ),
        ];

//        $json_data = [
//            array(
//                'title' => 'Google',
//                'url' => 'https://google.com'
//            ), array(
//                'title' => 'Yandex',
//                'url' => 'https://yandex.com'
//            ),
//        ];
//
//        return view('get-json' , [
//            'urldata' => $json_data
//        ]);

        //dd($json_data);

//        return view('get-json' , [
//            'url_data' => $json_data
//        ]);

    } //getJson

}
