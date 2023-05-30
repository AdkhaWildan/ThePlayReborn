<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('INI STORE') }}
        </h2>
    </x-slot>

    <div>
        <h1 class="text-white">TEST BANG --- EZ DIIEEEEK</h1>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Kowe mlebu!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('details') }}">
                    <img src="build/assets/explore1.png" style="height:150px" alt="">
                </a>
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("Kowe mlebu!") }}
            </div>
        </div>
    </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shrink-0 flex items-center">
                <a href="{{ route('details') }}">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                </a>
            </div>
        </div>
    </div>

</x-app-layout>