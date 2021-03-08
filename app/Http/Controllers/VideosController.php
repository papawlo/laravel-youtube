<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $youtubeApiUrl="https://youtube.googleapis.com/youtube/v3/search?part=snippet&q=flow&type=video&key=".config('services.google.key');
        // $videos = Http::get($youtubeApiUrl)->json()['items'];
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
