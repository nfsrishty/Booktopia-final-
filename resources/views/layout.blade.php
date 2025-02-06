<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #93E2FF;
            background-attachment: fixed;
            background-size: cover;
            color: #191970; /* Midnight Blue */
        }
        main {
            flex: 1;
        }
        .navbar {
            background:  #191970;
        }
        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
        }
        .nav-link {
            color: #fff !important;
            margin: 0 10px;
            font-weight: 500;
        }
        .nav-link:hover {
            text-decoration: underline;
        }
        .hero {
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #191970; /* Midnight Blue */
            background-color: #93E2FF;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 800'%3E%3Cg %3E%3Ccircle fill='%2393E2FF' cx='400' cy='400' r='600'/%3E%3Ccircle fill='%23a6e9fc' cx='400' cy='400' r='500'/%3E%3Ccircle fill='%23b9effa' cx='400' cy='400' r='400'/%3E%3Ccircle fill='%23cdf5f9' cx='400' cy='400' r='300'/%3E%3Ccircle fill='%23e0fafa' cx='400' cy='400' r='200'/%3E%3Ccircle fill='%23F3FFFE' cx='400' cy='400' r='100'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.5rem;
        }
        .footer {
            background: #f8f9fa;
            padding: 1.5rem 0;
            text-align: center;
            color: #191970; /* Midnight Blue */
        }
        .footer a {
            color:  #191970;
            text-decoration: none;
            margin: 0 10px;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">My Laravel Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                    @auth
                        <!-- Show Logout if user is authenticated -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <!-- Show Login and Register if user is not authenticated -->
                        <li class="nav-item"><a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a></li>
                    @endauth
                    <li class="nav-item"><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('qna') ? 'active' : '' }}" href="{{ url('/qna') }}">Q&A</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('addBook') ? 'active' : '' }}" href="{{ url('/addBook') }}">Explore</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('books') ? 'active' : '' }}" href="{{ url('/books') }}">Books</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    @if (Request::is('/'))
    <div class="hero">
        <div>
            <h1>Welcome to Booktopia!</h1>
            <br>
            <p>Find new books and enrich your collection</p>
        </div>
    </div>
    @endif

    <!-- Main Content -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 My Laravel Project. All Rights Reserved.</p>
        <p>
            <a href="{{ url('/privacy-policy') }}">Privacy Policy</a> |
            <a href="{{ url('/terms') }}">Terms of Service</a>
        </p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>