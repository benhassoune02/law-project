<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lawyers - Edit Question</title>

    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">
    <style>
        * {
            font-family: sans-serif;
            font-size: 16px;
        }

        body {
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .nav {
            background-color: rgba(2, 61, 124, 0.89);
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            margin-left:42px; 
            width: 100%;
        }

        .nav a {
            text-decoration: none;
            color: white;
            margin: 0 15px;
        }

        .container {
            margin-top: 120px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            color: #333;
            font-size: 18px;
            margin-bottom: 8px;
            text-align: left;
            width: 100%;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            resize: vertical; /* Allow vertical resizing of the textarea */
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

            <a href="{{ route('contact') }}">QUESTIONS</a>
            @auth('utilisateur')
                <a style="text-decoration: none; color: white;" href="{{ route('edit_profile') }}" onmouseover="this.style.color='red'" onmouseout="this.style.color='white'">MY PROFILE</a>
            @endauth
            @auth('utilisateur')
                <form action="{{ route('utilisateur-logout') }}" method="POST">
                    @csrf
                    <button type="submit" style="cursor: pointer; background-color: #3490dc; color: #fff; border: none; padding: 5px 10px; border-radius: 3px;">LOGOUT</button>
                </form>
            @endauth
        </div>
        
    </nav>

    <div class="container">
        <h2>Edit Question</h2>
        <form action="{{ route('questions.update', ['idea' => $idea->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="content">Edit Question:</label>
            <textarea name="idea" id="content" rows="5" required>{{ $idea->content }}</textarea>

            <button type="submit">Update Question</button>
        </form>
    </div>

</body>

</html>