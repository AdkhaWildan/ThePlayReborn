<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-l text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Library') }}
        </h2>
    </x-slot>

    {{-- <div class="py-6 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("IINI GAME YANG UDAH DIBELI BANG") }}
    </div>
    </div>
    </div>
    </div> --}}

    <div class="py-10 mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    @if($games->isEmpty())
                    <p>You don't have any games in your library yet.</p>
                    @else
                    <ul>
                        @foreach($games as $game)
                        <li>
                            {{-- <img src="{{ asset('images/games/' . $game->game->image) }}"
                            alt="{{ $game->game->gamename }}" style="height: 150px;">
                            <p>{{ $game->game->gamename }}</p> --}}
                            <div class="my-1 card bg-secondary text-white">
                                <div class="row">
                                    <div class="col-2 ">
                                        <img src="{{ asset('images/games/' . $game->game->image) }}"
                                            class="img-fluid w-100 h-32 m-2 rounded-2" alt="product"
                                            style="object-fit:cover">
                                    </div>
                                    <div class="col-8 mt-2">
                                        <p class="h6">{{ $game->game->gamename }}</p>
                                        <p class="text-sm text-gray-400 mb-6" style="font-size:70%">
                                            {{ $game->game->genre }}</p>
                                        <p class="text-sm" style="font-size:80%">Developer: {{ $game->game->developer }}
                                        </p>
                                        <p class="text-sm" style="font-size:80%">Release Date:
                                            {{ $game->game->releasedate }}</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @endif






                </div>
            </div>
        </div>
    </div>
</x-app-layout>