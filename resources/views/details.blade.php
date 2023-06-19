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
            <img src="{{ asset('images/games/' . $data->image) }}" alt="">
            <p class="mb-1 ">{{ $data->gamename }}</p>
            <p class="mb-1 ">{{ $data->developer }}</p>
            <p class="mb-1 ">{{ $data->price }}</p>
            <p class="mb-1 ">{{ $data->publisher }}</p>
            <p class="mb-1 ">{{ $data->description }}</p>
            <p class="mb-1 ">{{ $data->releasedate }}</p>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to buy this game?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="{{ route('buy', ['gameid' => $data->gameid]) }}" type="button"
                        class="btn btn-primary">Buy</a>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>