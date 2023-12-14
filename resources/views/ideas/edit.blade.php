<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Comment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa; /* Set your desired background color */
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 220px; /* Adjust the width as needed */
            padding-top: 56px; /* Set the same value as the navbar height */
            background-color: #343a40; /* Set your desired sidebar background color */
            color: #fff; /* Set your desired text color */
        }

        .main-content {
            margin-left: 220px; /* Set the same value as the sidebar width */
            padding: 20px;
        }

        /* Add additional styling for the form if needed */
        form {
            margin-top: 20px;
        }

        form label {
            display: block;
            margin-bottom: 8px;
        }

        form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
        }
        #navbarNav{
            margin-bottom: 20px;
        }
        .nav-link{
            margin-top: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto"> <!-- Use ml-auto to push the items to the right -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact-user') }}">Ideas</a>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<div class="sidebar">
    <ul class="nav flex-column">
        <!-- Sidebar content goes here -->
    </ul>
</div>

<div class="main-content">
    @yield('content')

    <!-- Your existing form for editing comments -->
    <form action="{{ route('comment.update', ['comment' => $comment->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="content">Edit Comment:</label>
        <textarea name="content" id="content" rows="3" required>{{ $comment->content }}</textarea>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>