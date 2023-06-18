<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('INI DETAILS') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="card max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="col-3 ">
                <img src="build/assets/explore1.png" style="height:150px" alt="">
            </div>
            <p class="mb-1 ">{{ $data->gamename }}</p>
            <p class="mb-1 ">{{ $data->developer }}</p>
            <p class="mb-1 ">{{ $data->price }}</p>
            <p class="mb-1 ">{{ $data->publisher }}</p>
            <p class="mb-1 ">{{ $data->description }}</p>
            <p class="mb-1 ">{{ $data->releasedate }}</p>
        </div>
    </div>
    </div>

</x-app-layout>