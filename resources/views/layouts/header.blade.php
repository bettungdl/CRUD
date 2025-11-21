<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>C R U D</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5"> <a class="navbar-brand" href="/">CRUD</a> <button class="navbar-toggler"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li> <li class="nav-item"><a class="nav-link" href="#!">About</a></li> {{ route('profile.show') }}-->
                    @if (Route::has('login')) @auth @role('admin') <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.users') }}">Admin Users</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/dashboard') }}">Dashboard</a> </li>
                    @endrole @role('user') <li class="nav-item"> <a class="nav-link" href="{{ url('/#!') }}">Users</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a> </li>
                    @endrole <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}"> @csrf <a class="nav-link"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">Cerrar Sesión </a>
                        </form>
                    </li> @else <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}">Login</a> </li>
                    @if (Route::has('register')) <li class="nav-item"> <a class="nav-link"
                            href="{{ route('register') }}">Registro</a> </li> @endif @endauth @endif
                </ul>
            </div>
        </div>
    </nav>