<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use GuzzleHttp\Client;

class VideosController extends Controller
{
        public string $youtubeApiUrl = "https://youtube.googleapis.com/youtube/v3/search";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //    $videos=[];
        //    $response=null;

        //     $client = new Client();
        // $url = config('services.google.youtubeUrl');

        // $params = [
        //   "part"=>"snippet",
        //     "q"=>'google',
        //     "type"=>"video",
        //     "key"=>config('services.google.key')
        // ];

        // $headers = [
        //     // 'key' => config('services.google.key')
        // ];

        // $response = $client->request('GET', $url, [
        //     // 'json' => $params,
        //     'headers' => $headers,
        //     'verify'  => false,
        // ]);

        // $responseBody = json_decode($response->getBody());


        // echo '<pre>';

        // echo 'ITEMS';
        // var_dump($responseBody);
        // echo '</pre>';
        // exit;

        $videos=[];
        return view('index',[
            "videos"=>$videos,
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

}
