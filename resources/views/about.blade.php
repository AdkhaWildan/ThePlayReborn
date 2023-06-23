<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-l text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ABOUT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-secondary dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    <img src="assets/img/LOGO.png" style="width: 200px" alt="" class="mx-auto my-10">
                    <div class="mx-10 text-large">
                        {{ __("The Plays adalah platform game lokal terbesar di Indonesia. Kami menyajikan game-game lokal ternama untuk diakses oleh seluruh gamers dari seluruh dunia.") }}
                        Mainkan dan nikmati setiap petualangan melalui hiburan-hiburan terbaik buatan tanah air. Enjoy the ride and stay classy!!

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-secondary dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    <div class="mx-10 h3 text-center">
                        {{ __("Our Founders") }}
                    </div>
                    <div class="row">
                        <div class="col-3 offset-3">
                            <img src="assets/img/farnoov.png" alt="" class="h-64">
                        </div>
                        <div class="col-3 ">
                            <img src="assets/img/wildan.png" alt="" class="h-60 mt-4">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>