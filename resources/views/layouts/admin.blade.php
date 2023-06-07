<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Damiano Casolari')</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
        integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-light bg-light bg-dark fixed-top strong_shadow">
            <div class="container-fluid">
                <div class="d-flex align-items-center h-100">
                    <h3 class="text-light me-3">My Projects</h3>
                    <a class="navbar-brand text-light text-white-50" href="{{ route('welcome') }}">Home</a>
                </div>
                <div class="">
                    <a class="no_undescore text-light p-2 d-none d-md-block" href="#">
                        Sign out
                    </a>
                </div>
                <button class="navbar-toggler d-md-none text-light d-flex justify-content-center align-items-center"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="offcanvas offcanvas-end d-md-none vh100" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 ">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2 {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-dark text-white' : '' }}"
                                    aria-current="page" href="{{ route('admin.dashboard') }}">
                                    <i class="fa-solid fa-gauge"></i>
                                    {{ __('Dashboard') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2 {{ Route::currentRouteName() == 'admin.projects.index' ? 'bg-dark  text-white-50' : 'text-muted' }}"
                                    href="{{ route('admin.projects.index') }}">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    {{ __('Project') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2 " href="#">
                                    <i class="fa-solid fa-bookmark"></i>
                                    Categories
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2 " href="#">
                                    <i class="fa-solid fa-tags"></i>
                                    Tags
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2" href="#">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                    Sign out
                                </a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>


        {{-- <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 shadow" height="100">
            <div class="w-100 d-flex">
                <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse"
                    data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">My Project</a>
            </div>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#">Sign out</a>
                </li>
            </ul>

        </nav>

        <div class="container-fluid vh-100">
            <div class="row h-100">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-dark' : '' }}"
                                    aria-current="page" href="{{ route('admin.dashboard') }}">
                                    <i class="fa-solid fa-gauge"></i>
                                    {{ __('Dashboard') }}
                                </a>
                            </li> --}}
        {{-- <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() == 'admin.posts.index' ? 'bg-dark' : '' }}"
                                    href="{{ route('admin.posts.index') }}">
                                    <i class="fa-solid fa-thumbtack"></i>
                                    {{ __('Posts') }}
                                </a>
                            </li> --}}
        {{-- <li class="nav-item">
                                <a class="nav-link " href="#">
                                    <i class="fa-solid fa-bookmark"></i>
                                    Categories
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">
                                    <i class="fa-solid fa-tags"></i>
                                    Tags
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav> --}}

        <main class="col-12 d-flex justify-content-between">
            <nav class="d-none col-md-4 col-lg-2 d-md-block bg-light sidebar collapse desktop_nav">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-dark  text-light' : ' text-muted' }}"
                                aria-current="page" href="{{ route('admin.dashboard') }}">
                                <i class="fa-solid fa-gauge"></i>
                                {{ __('Dashboard') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'admin.projects.index' ? 'bg-dark text-white-50' : 'text-muted' }}"
                                href="{{ route('admin.projects.index') }}">
                                <i class="fa-solid fa-thumbtack"></i>
                                {{ __('Project') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">
                                <i class="fa-solid fa-bookmark"></i>
                                Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">
                                <i class="fa-solid fa-tags"></i>
                                Tags
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
            <div class="modular_content w-100">
                @yield('content')
            </div>
        </main>
    </div>
    </div>

    </div>
</body>

</html>
