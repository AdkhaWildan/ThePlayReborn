<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-l text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ADD GAME') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <form method="POST" action=" {{ route('addgame') }}" enctype="multipart/form-data">
            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="mb-3">
                            <label for="image" class="form-label">Game Image</label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="gamename" class="form-label">Name of Game</label>
                            <input type="text" class="form-control form-control-sm" id="gamename" name="gamename">
                        </div>
                        <div class="mb-3">
                            <label for="developer" class="form-label">Developer</label>
                            <input type="text" class="form-control form-control-sm" id="developer" name="developer">
                        </div>
                        <div class=" mb-3">
                            <label for="publisher" class="form-label">Publisher</label>
                            <input type="text" class="form-control form-control-sm" id="publisher" name="publisher">
                        </div>
                        <div class=" mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <input type="text" class="form-control form-control-sm" id="genre" name="genre">
                        </div>
                        <div class=" mb-3">
                            <label for="releasedate" class="form-label">Release Date</label>
                            <input type="date" class="form-control form-control-sm" id="releasedate" name="releasedate">
                        </div>
                        <div class=" mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" min="0" step="1" class="form-control form-control-sm" id="price"
                                name="price">
                        </div>
                        <div class=" mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="description"></textarea>
                        </div>

                        <input class=" btn bg-secondary justify-center text-light" type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>