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
        //                echo '<pre>';
        // var_dump($searchResults);
        // echo '</pre>';
        // exit;

            } catch (\Throwable $th) {
                $errors =$th->message();
            }
        }


        $viewModel = new VideosViewModel($searchResults);
        // echo '<pre>';
        // var_dump($viewModel);
        // echo '</pre>';
        // exit;

        return view('livewire.search-video',$viewModel);
        // return view('livewire.search-video',[
        //     'searchResults'=>$searchResults
        // ]);
    }
}
