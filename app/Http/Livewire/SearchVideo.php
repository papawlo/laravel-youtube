<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\ViewModels\VideosViewModel;

class SearchVideo extends Component
{
    public string $search = '';

    public function render()
    {
        $errors='';
        $searchResults=[];
        if(strlen($this->search)> 3){
            try {
               $response = Http::get(config('services.google.youtubeUrl'),[
                "part"=>"snippet",
                "q"=>$this->search,
                "type"=>"video",
                "key"=>config('services.google.key')
                ]);

                $searchResults=  $response->json()['items'];

            } catch (\Throwable $th) {
                $errors =$th->message();
            }
        }


        $viewModel = new VideosViewModel($searchResults);

        return view('livewire.search-video',$viewModel);

    }
}
