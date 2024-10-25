<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/css/kaprodi.css'])
    <link rel="stylesheet" href="{{ asset('lib/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/fontawesome/css/solid.css') }}">
    @yield('css')
    <title>Dashboard</title>

</head>

<body>

    <div class="sidebar">
        <div class="sidebar-header">
            <h2>DASHBOARD ADMIN</h2>
        </div>

        <ul class="sidebar-warp">
            <li class="sidebar-item {{ request()->routeIs('Dashboardkaprodi') ? 'active' : '' }}">
                <a href="{{ route('Dashboardkaprodi') }}"><i class="fa-solid fa-gauge pe-4"></i>Dashboard</a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('Kelaskaprodi') ? 'active' : '' }}">
                <a href="{{ route('Kelaskaprodi') }}"><i class="fa-solid fa-book pe-4"></i></i>Kelas</a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('Dosenkaprodi') ? 'active' : '' }}">
                <a href="{{ route('Dosenkaprodi') }}"><i class="fa-solid fa-chalkboard-user pe-4"></i>Dosen</a>
            </li>
            <li class="sidebar-item {{ request()->routeIs('Mahasiswakaprodi') ? 'active' : '' }}">
                <a href="{{ route('Mahasiswakaprodi') }}"><i class="fa-solid fa-user pe-4"></i>Mahasiswa</a>
            </li>
        </ul>

        <form action="{{ route('logout') }}" method="post" class="absolute bottom-10">
            @csrf
            <button type="submit" class="sidebar-item text-white"><i class="fa-solid fa-arrow-right-from-bracket pe-4"></i>Logout</button>
        </form>
    </div>

    <div class="content">

        <header class="header-content flex justify-between items-center h-20 bg-white  px-4 drop-shadow-md">
            @yield('header')
            
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 me-2 rounded-full" src="/utdi.jpg" alt="user photo">
                {{ Auth::user()->name }}
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button> 
        </header>

        <div class="content-sec">
            @yield('content')
        </div>

    </div>



</body>
<script src="{{ asset('lib/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/kaprodi/kelas/edit.js') }}"></script>
@include('sweetalert::alert')
@yield('js')


</html>