<div class="flex flex-col justify-center items-center">

    <div class="relative">
        <input wire:model.debounce.500ms="search" type="text" name="search" id="search" placeholder="Search"
            class="text-lg placeholder-white bg-gray-700 rounded-full w-64 px-4 pl-8 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent">
        <div class="absolute top-0">
            <svg class="w-4 fill-current text-white mt-1 ml-2" xmlns="http://www.w3.org/2000/svg"
                viewBox="-1 0 136 136.219">
                <path
                    d="M93.148 80.832c16.352-23.09 10.883-55.062-12.207-71.41S25.88-1.461 9.531 21.632C-6.816 44.723-1.352 76.693 21.742 93.04a51.226 51.226 0 0055.653 2.3l37.77 37.544c4.077 4.293 10.862 4.465 15.155.387 4.293-4.075 4.465-10.86.39-15.153a9.21 9.21 0 00-.39-.39zm-41.84 3.5c-18.245.004-33.038-14.777-33.05-33.023-.004-18.246 14.777-33.04 33.027-33.047 18.223-.008 33.008 14.75 33.043 32.972.031 18.25-14.742 33.067-32.996 33.098h-.023zm0 0" />
            </svg>
        </div>
        <div wire:loading class="spinner absolute w-3 top-3.5 right-4"></div>
    </div>

    @if (strlen($search)>3)
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @if (count($searchResults) > 0)
        @foreach ($searchResults as $video)
        <x-video-card :video="$video" />
        @endforeach
        @else
        <div class="px-3 py-3">No Results for: {{$search}}</div>
        @endif
    </div> <!-- end card -->
    @endif
</div>
