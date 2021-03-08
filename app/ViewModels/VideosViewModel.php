<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class VideosViewModel extends ViewModel
{
    public $videos;

    public function __construct($videos)
    {
        $this->videos= $videos;

    }

    public function searchResults(){
        return $this->formatVideos($this->videos);
    }

    private function formatVideos($videos)
    {
        $newVideos=[];
        foreach ($videos as $video) {
            $newVideo=[];
            $newVideo['thumbnail'] = $video["snippet"]["thumbnails"]["medium"]["url"];
            $newVideo['url'] = "https://www.youtube.com/watch?v=".$video["id"]["videoId"];
            $newVideo['title']= $video["snippet"]["title"];
            array_push($newVideos, $newVideo);
        }
        return $newVideos;
    }
}
