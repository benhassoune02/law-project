<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa; 
            font-family: sans-serif;
            padding-top: 56px; /* Set the same value as the navbar height */
        }
        .main-content {
            margin-left: 80px; 
            margin-right: 80px;
            padding: 15px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white fixed-top">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" style="color: #f8f9fa" href="{{ route('contact-user') }}">Ideas</a>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" style="color: #f8f9fa" class="btn ">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>



<div class="main-content">
    @yield('content')   
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>