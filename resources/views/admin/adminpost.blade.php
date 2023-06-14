<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ADMIN HOME') }}
        </h2>
    </x-slot>

    <div>
        <h1 class="text-white">TEST BANG --- EZ DIIEEEEK</h1>
    </div>
    <div class="py-12">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="mb-3">
                            <label for="image" class="form-label">Game Image</label>
                            <input class="form-control" type="file" id="image">
                        </div>
                        <div class="mb-3">
                            <label for="gamename" class="form-label">Name of Game</label>
                            <input type="text" class="form-control form-control-sm" id="gamename">
                        </div>
                        <div class="mb-3">
                            <label for="developer" class="form-label">Developer</label>
                            <input type="text" class="form-control form-control-sm" id="developer">
                        </div>
                        <div class="mb-3">
                            <label for="publisher" class="form-label">Publisher</label>
                            <input type="text" class="form-control form-control-sm" id="publisher">
                        </div>
                        <div class="mb-3">
                            <label for="releasedate" class="form-label">Release Date</label>
                            <input type="date" class="form-control form-control-sm" id="releasedate">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" min="0" step="1" class="form-control form-control-sm" id="price">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <input class="btn btn-primary justify-center" type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>