<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchVideo extends Component
{
    public string $search = '';


    public function render()
    {
        $searchResults=[];
        if(strlen($this->search)> 3){
            $youtubeApiUrl="https://youtube.googleapis.com/youtube/v3/search?part=snippet&q=".$this->search."&type=video&key=".config('services.google.key');
            $searchResults = Http::get($youtubeApiUrl)->json()['items'];
        }

        return view('livewire.search-video',[
            'searchResults'=>$searchResults
        ]);
    }
}
