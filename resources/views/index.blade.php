@extends('layouts.main')
@section('content')
<div class="container mx-auto px-4 pt-16 h-screen bg-gray-700">
    <div class="video">
        <h2 class="uppercase tracking-wider text-gray-100 text-lg font-semibold">Videos</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($videos as $video)
            <div class="mt-8">
                <a href="#">
                    <img src="{{$video["snippet"]["thumbnails"]["medium"]["url"]}}" alt="thumb"
                        class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 ">
                </a>
                <div class="mt-2">
                    <a href="" class="text-lg mt-2 hover:text-gray-300">
                        {{$video["snippet"]["title"]}}
                    </a>
                </div>
            </div> <!-- end card -->
            @endforeach
        </div> <!-- end card -->
    </div>
</div>
@endsection
