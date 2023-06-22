<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('INI STORE') }}
        </h2>
    </x-slot>

    <div class="py-10 mx-auto bg-primary container text-light">
        <div class="mb-1 card rounded-3 bg-secondary border-0">
            <div class="row">
                <div class="col-3">
                    <img class="img-fluid w-100 h-60 m-2 rounded-3" src="{{ asset('images/games/' . $data->image) }}"
                        alt="" style="object-fit: cover">
                </div>
                <div class="col-7">
                    <div class="mt-3">
                        <p class="h6 font-bold">{{ $data->gamename }}</p>
                        <p class="text-gray-400" style="font-size: 70%">{{ $data->genre }}</p>
                        <p class="mt-2" style="font-size: 80%"><b>Developer:</b> {{ $data->developer }}</p>
                        <p class="mt-2" style="font-size: 80%"><b>Release Date:</b> {{ $data->releasedate }}</p>
                    </div>
                    <div class="text-bottom mt-4">
                        <p class="text-align-bottom" style="font-size: 80%">{{ $data->description }}</p>
                    </div>
                    <div class="my-auto mt-3">
                        <p class="h6">Rp{{ $data->price }}</p>
                    </div>
                </div>
                <div class="col-2">
                    @if (Auth::check())
                    <a type="button" class="d-flex btn bg-light align-bottom text-secondary  mr-4 mt-48 w-32"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <p class="font-semibold ml-4">
                            Buy Now
                        </p>
                    </a>
                    @else
                    <a href="{{ route('login') }}"
                        class="d-flex btn bg-light align-bottom text-secondary  mr-4 mt-48 w-32">
                        <p class="font-semibold ml-4">
                            Login to Buy
                        </p>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-secondary text-light">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Purchase Game</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to buy this game?
                    <p class="font-semibold mb-6" style="font-size: 70%">
                        Your Current Wallet: RpXXXXXX
                    </p>
                    <p class="h6 font-bold">{{ $data->gamename }}</p>
                    <p class="text-gray-400" style="font-size: 70%">{{ $data->genre }}</p>
                    <p class="mt-2" style="font-size: 80%"><b>Developer:</b> {{ $data->developer }}</p>
                    <p class="mt-2" style="font-size: 80%"><b>Release Date:</b> {{ $data->releasedate }}</p>
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