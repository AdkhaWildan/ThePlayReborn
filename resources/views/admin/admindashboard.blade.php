<x-app-layout>
    <x-slot name="header">
        <h2 class=" font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ADMIN HOME') }}
        </h2>
    </x-slot>

    <div>
        <h1 class="text-white">TEST BANG --- EZ DIIEEEEK</h1>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button align='right' type="button" class="btn btn-outline-primary">Primary</button>
            <div><br></div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Game id</th>
                                <th scope="col">Game Name</th>
                                <th scope="col">Developer</th>
                                <th scope="col">Publisher</th>
                                <th scope="col">Description</th>
                                <th scope="col">Release Date</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach($data as $data)
                            <tr>
                                <td>{{ $data->gameid }}</td>
                                <td>{{ $data->gamename }}</td>
                                <td>{{ $data->developer }}</td>
                                <td>{{ $data->publisher }}</td>
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