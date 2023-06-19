<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('INI PAGE GAME KU') }}
        </h2>
    </x-slot>

    <div>
        <h1 class="text-white">TEST BANG --- EZ DIIEEEEK</h1>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("IINI GAME YANG UDAH DIBELI BANG") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h1 class="text-2xl font-bold mb-4">Your Library</h1>

                    @if($games->isEmpty())
                    <p>You don't have any games in your library yet.</p>
                    @else
                    <ul>
                        @foreach($games as $game)
                        <li>
                            <img src="{{ asset('images/games/' . $game->game->image) }}"
                                alt="{{ $game->game->gamename }}" style="height: 150px;">
                            <p>{{ $game->game->gamename }}</p>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>