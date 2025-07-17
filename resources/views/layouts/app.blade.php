                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Laravel CRUD</title>
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
                                rel="stylesheet">
                        </head>

                        <body>
                            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                <div class="container">
                                    <a class="navbar-brand" href="{{ url('/') }}">Laravel CRUD</a>
                                    <div class="collapse navbar-collapse">
                                        <ul class="navbar-nav ms-auto">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                                            </li>
                                            @auth
                                                <li class="nav-item">
                                                    <span
                                                        class="btn-link nav-link text-white">{{ Auth::user()->email }}</span>
                                                </li>
                                                <li class="nav-item">
                                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-link nav-link"
                                                            style="display:inline;cursor:pointer;">Logout</button>
                                                    </form>
                                                </li>
                                            @else
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                                </li>
                                            @endauth
                                            @guest
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                                                </li>
                                            @endguest
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <main class="py-4">
                                @yield('content')
                            </main>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                        </body>

                        </html>
