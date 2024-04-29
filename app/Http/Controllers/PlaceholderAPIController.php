<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlaceholderAPIController extends Controller
{
    public function index()
    {
    //    $responses = Http::get('https://jsonplaceholder.typicode.com/posts/1');

    //    dd($responses->json()['title']);

    //    return view('PlaceholerApi.index',[
    //         'data'=>$responses->json()
    //    ]);
    $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
        'title' => 'titre exempalire',
        'body' => 'exemple de contenu',
        'userid' => 125
         ]);

    dd($response->json());
    }
}
