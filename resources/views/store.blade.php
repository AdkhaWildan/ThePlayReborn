<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-l text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('STORE') }}
        </h2>
    </x-slot>

    <!-- {{-- <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Kowe mlebu!") }}
                </div>
            </div>
        </div>
    </div> --}} -->

    <div class="container py-10 mt-5">
        <div class="pl-2 row">
            <div class="card col-2 bg-light">
                <div class="pl-2">
                    <h6 class="pt-6 font-semibold">
                        Filter by
                    </h6>
                    <p class="pt-2">
                        Genre
                    </p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <p style="font-size: 90%">
                                Action
                            </p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <p style="font-size: 90%">
                                Adventure
                            </p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <p style="font-size: 90%">
                                RPG
                            </p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <p style="font-size: 90%">
                                Sport
                            </p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <p style="font-size: 90%">
                                Horror
                            </p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <p style="font-size: 90%">
                                Simulation
                            </p>
                        </label>
                    </div>

                    <p class="pt-2">
                        Mode
                    </p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <p style="font-size: 90%">
                                Single Player
                            </p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <p style="font-size: 90%">
                                Multiplayer
                            </p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <p style="font-size: 90%">
                                Co-op
                            </p>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <p style="font-size: 90%">
                                Local
                            </p>
                        </label>
                    </div>
                    <br>
                </div>
            </div>
            <div class="ml-8 col-9 bg-primary">
                @foreach ($data as $data)
                <div class="mb-1 card rounded-3 bg-white border-0">
                    <div class="row">
                        <div class="col-3">
                            <a href="{{ route('details', ['gameid' => $data->gameid]) }}">
                                <img src="{{ asset('images/games/' . $data->image) }}"
                                    class="img-fluid w-60 h-32 m-2 rounded-3" alt="product" style="object-fit: cover">
                            </a>
                        </div>
                        <div class="col-5 mt-3">
                            <p class="h6 font-bold">{{ $data->gamename }}</p>
                            <p class="" style="font-size: 80%">{{ $data->developer }}</p>
                            <p class="" style="font-size: 80%">{{ $data->publisher }}</p>
                            <p class="mt-4 text-gray-600" style="font-size: 70%">{{ $data->genre }}</p>
                        </div>
                        <div class="d-flex col-2 my-auto ">
                            <p class="h6 text-right">Rp{{ $data->price }}</p>
                        </div>
                        <div class="col-2 my-auto mx-auto">
                            <a href="{{ route('details', ['gameid' => $data->gameid]) }}"
                                class="btn btn-secondary btn-lg active btn-sm" role="button" aria-pressed="true">
                                <p class="font-semibold" style="font-size:70%">
                                    Play Now
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- @foreach ($data as $data)
    <div class="mb-1 card bg-white">
                <a href="{{ route('details', ['gameid' => $data->gameid]) }}">
    <img src="build/assets/explore1.png" style="height:150px" alt="">
    </a>
    <p class="mb-1 ">{{ $data->gamename }}</p>
    <p class="mb-1 ">{{ $data->developer }}</p>
    <p class="mb-1 ">{{ $data->price }}</p>
    <p class="mb-1 ">{{ $data->publisher }}</p>
    </div>
    @endforeach
    --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shrink-0 flex items-center">

            </div>
        </div>
    </div>

</x-app-layout>