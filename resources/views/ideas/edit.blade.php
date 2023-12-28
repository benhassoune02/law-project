<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>


        


form label {
    margin-bottom: 8px;
}

form textarea {
    width: 50%;
    padding: 8px;
    margin-top: 80px;
    margin-left: 80px;
    margin-bottom: 16px;
}



.container {
    margin-left: 180px;
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
                    <button type="submit" style="color: #f8f9fa" class="btn">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<div class="main-content">
    @yield('content')

    <!-- Your existing form for editing comments -->
    <form action="{{ route('comment.update', ['comment' => $comment->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div >
            <textarea name="content" id="content" rows="10" required>{{ $comment->content }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary" style="margin-left:80px;">Save Changes</button>

    </form>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>




