<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lawyers</title>
    
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
            font-family: sans-serif;
            font-size: 16px;
        }

        .custom-image-size {
            width: 200px; /* Set the width as needed */
            height: 200px; /* Set the height as needed */
            object-fit: cover; /* Maintain aspect ratio and cover the container */
        }

        h2 {
            margin-top: 85px;
        }

        a:hover {
            color: red;
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
                    <button type="submit" style="cursor: pointer; background-color: #3490dc; color: #fff; border: none; padding: 5px 10px; border-radius: 3px;">LOGOUT</button>
                </form>
            @endauth
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="text-center">Free Q&A with lawyers Online </h2>
        <p class="text-center">
            Welcome to our legal consultation service! Feel free to ask any legal questions or provide details about your case in the form below. Our experienced attorneys are here to assist you with valuable advice and guidance. Please note that the information provided is for general purposes and not legal advice tailored to your specific situation.
        </p>

        <form method="POST" action="{{ route('storeIdea') }}" class="mt-3">
            @csrf
            <div class="form-group">
                <label for="case">Your Case:</label>
                <input class="form-control" name="case" rows="4" placeholder="Describe your case or ask any legal question..." required>
            </div>
            <div class="form-group">
                <label for="idea">Your Question:</label>
                <textarea class="form-control" name="idea" rows="8" placeholder="Describe your case or ask any legal question..." required></textarea>
            </div>
            @error('idea')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Submit Question</button>
        </form>

        <!-- Existing content... -->

    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>