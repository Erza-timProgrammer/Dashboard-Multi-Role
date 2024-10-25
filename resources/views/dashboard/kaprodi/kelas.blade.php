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
    <div class="table-container">

        <div class="table-header mb-3">
            <h1 class="text-2xl font-medium text-gray-400">Data Kelas</h1>
            <a href="{{ route('TambahKelasKaprodi') }}" class="button-blue shadow-lg">+ Tambah </a>
        </div>

        <div class="relative overflow-x-auto  border sm:rounded-lg mb-3">
            <table class="w-full table-auto border-collapse text-sm text-left rtl:text-right text-gray-700">
                <thead class="text-xs text-gray-200 border-b uppercase bg-blue-500">
                    <tr>
                        <th class="p-3">
                            ID
                        </th>
                        <th class="p-3">
                            Nama Kelas
                        </th>
                        <th class="p-3">
                            Dosen
                        </th>
                        <th class="p-3 text-center">
                            Jumlah
                        </th>
                        <th class="p-3 w-auto text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $dat)
                        <tr class="bg-gray-100 ">
                            <th scope="row" class="p-3  font-medium text-gray-900">
                                {{ $dat->id }}
                            </th>
                            <td class="p-3 ">
                                {{ $dat->name }}
                            </td>
                            <td class="p-3 ">
                                {{ $dat->dosen->name ?? 'null' }}
                            </td>
                            <td class="p-3 text-center">
                                {{$dat->jumlah}} / {{ $dat->MaxClass() }}
                            </td>
                            <td class="p-3 text-center">
                                <a href="{{ route('editKelasKaprodi', $dat->id) }}" class="p-2"><i
                                        class="fa-regular fa-pen-to-square"></i></a>
                                <form action="{{ route('procces-delete-kelas', $dat->id) }}" method="post" class="inline p-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?');"><i class="fa-solid fa-trash"></i></button>
                                </form>
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
        <div class="pagination">
            {{ $data->links() }}
        </div>

    </div>
@endsection