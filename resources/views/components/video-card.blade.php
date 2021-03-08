<div class="mt-8">
    <a href="{{$video["url"]}}" target="_blank">
        <img src="{{$video["thumbnail"]}}" alt="thumb"
            class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 ">
    </a>
    <div class="mt-2">
        <a href="{{$video["url"]}}" class="text-lg mt-2 hover:text-gray-300">
            {!! $video["title"] !!}
        </a>
    </div>
</div> <!-- end card -->
