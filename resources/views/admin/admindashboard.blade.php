<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-semibold text-l text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ADMIN DASHBOARD') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('adminpost') }}" align='right' type="button" class="btn bg-secondary text-light">Tambah
                Game</a>
            <div><br></div>
            <div class="bg-secondary dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table text-light">
                        <thead>
                            <tr>
                                <th scope="col">Game id</th>
                                <th scope="col">Image</th>
                                <th scope="col">Game Name</th>
                                <th scope="col">Developer</th>
                                <th scope="col">Publisher</th>
                                <th scope="col" class="w-32">Genre</th>
                                <th scope="col" class="w-60">Description</th>
                                <th scope="col">Release Date</th>
                                <th scope="col" class="w-">Price</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach($data as $data)
                            <tr>
                                <td>{{ $data->gameid }}</td>
                                <td>
                                    <img src="{{ asset('images/games/' . $data->image) }}" alt="">
                                </td>
                                <td>{{ $data->gamename }}</td>
                                <td>{{ $data->developer }}</td>
                                <td>{{ $data->publisher }}</td>
                                <td>{{ $data->genre }}</td>
                                <td>{{ $data->description }}</td>
                                <td>{{ $data->releasedate }}</td>
                                <td>{{ $data->price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>