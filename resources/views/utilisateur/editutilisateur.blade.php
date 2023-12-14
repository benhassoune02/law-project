<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT</title>

    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
            font-family: sans-serif;
            font-size: 16px;
        }

        .custom-image-size {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        h2 {
            margin-top: 85px;
        }

        a:hover {
            color: red;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin-top: 80px ;
            background-color: #fff;
            padding-top: 5px;
            padding-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 15px;
            color: #333;
            font-size: 16px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <nav class="nav">
        <div>
            <a href=""><img src="/images/avocat-conseil-enligne.png"></a>
        </div>
        <div style="display: flex; align-items: center;">
            <a style="text-decoration: none; color: white;" href="{{ route('contact') }}" onmouseover="this.style.color='red'" onmouseout="this.style.color='white'">QUESTIONS</a>
            @auth('utilisateur')
            <a style="text-decoration: none; color: white;" href="{{ route('edit_profile') }}" onmouseover="this.style.color='red'" onmouseout="this.style.color='white'">MY PROFIL</a>
            @endauth
            @auth('utilisateur')
            <form action="{{ route('utilisateur-logout') }}" method="POST">
                @csrf
                <button type="submit" style="cursor: pointer; background-color: #3490dc; color: #fff; border: none; padding: 2px 5px; border-radius: 3px; fontt-size: 8px;">LOGOUT</button>
            </form>
            @endauth
        </div>
    </nav>

    <div class="container">
        <h2 class="text-center">Edit Your Profile</h2>

        <form action="{{ route('update_profile') }}" method="POST">
            @csrf
            <!-- Add your profile fields here -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ optional($utilisateur)->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ optional($utilisateur)->email }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <!-- Add more fields as needed -->

            <button type="submit" class="btn btn-primary" style="margin-right: 82px;">Update Profile</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>