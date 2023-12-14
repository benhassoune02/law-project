<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 17px;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        main {
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h3 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
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
            background-color: #2196F3;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0b7dda;
        }

    </style>
</head>

<body>

    <nav class="nav">
        <div>
            <a href=""><img src="/images/avocat-conseil-enligne.png"></a>
        </div>
        <div style="display: flex; align-items: center;">
            <a style="text-decoration: none; color: white;" href="{{ url('/') }}" onmouseover="this.style.color='red'" onmouseout="this.style.color='white'">HOME</a>
            <a style="text-decoration: none; color: white;" href="{{ url('/') }}" onmouseover="this.style.color='red'" onmouseout="this.style.color='white'">ABOUT</a>
            <a style="text-decoration: none; color: white;" href="{{ route('lawyers') }}" onmouseover="this.style.color='red'" onmouseout="this.style.color='white'">LAWYERS</a>
            <a style="text-decoration: none; color: white;" href="{{ route('contact') }}" onmouseover="this.style.color='red'" onmouseout="this.style.color='white'">QUESTIONS</a>
            
        </div>
    </nav>
    
    <main>
        <form method="POST" action="{{ route('register_utilisateur') }}">
            @csrf

            <h3>Sign Up</h3>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">SIGN UP</button>

            @if (Route::has('utilisateur.register-utilisateur'))
                <a href="{{ route('login_page') }}">Already have account ?</a>
            @endif

        </form>
    </main>


</body>

</html>

























