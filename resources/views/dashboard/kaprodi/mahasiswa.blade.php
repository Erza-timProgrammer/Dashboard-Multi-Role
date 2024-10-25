@extends('dashboard.KaprodiLayout')

@section('header')

<div>

    <form class="flex items-center max-w-sm mx-auto">   
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                </svg>
            </div>
            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search branch name..." required />
        </div>
        <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
            <span class="sr-only">Search</span>
        </button>
    </form>
    
</div>
@endsection


@section('content')

<h1 class="text-2xl font-medium text-gray-400">Data Mahasiswa</h1>
<div class="relative overflow-x-auto border sm:rounded-lg mb-3">
    <table class="w-full text-sm text-left rtl:text-right text-gray-700">
        <thead class="text-xs text-gray-300 border-b uppercase bg-blue-500">
            <tr>
                <th scope="col" class="px-6 py-3">
                    no
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    NIM
                </th>
                <th scope="col" class="px-6 py-3">
                    Kelas
                </th>
                <th scope="col" class="px-6 py-3">
                    Tempat Lahir
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Lahir
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $dat)
                <tr class="bg-gray-100 ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                        {{ $loop->iteration }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $dat->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $dat->nim }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $dat->kelas->name ?? 'belum ada kelas' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $dat->tempat_lahir }}
                    </td>
                    <td class="px-6 py-4 ">
                        {{ $dat->tanggal_lahir }}
                    </td>
                </tr>

            @empty
                <td class="px-6 py-4 text-center" colspan="5">
                    <a href="#" class="font-medium text-center">No data</a>
                </td>
            @endforelse
        </tbody>
    </table>

</div>

{{ $data->links() }}

@endsection