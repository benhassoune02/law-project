<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lawyers</title>

    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">
    <style>
        * {
            font-family: sans-serif;
            font-size: 16px;
        }
        
        body {
            background-color: #f5f5f5; /* Customized background color */
        }

        .custom-image-size {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        h1{
            margin-top: 85px;
            margin-left: 65px;
            font-size: 55px;
        }

        a:hover {
            color: red;
        }

        .container-cards {
            margin-bottom: 60px;
            background-color: #f8f9fa;
            margin-top: 100px;
            padding: 20px; /* Add padding for better spacing */
        }

        .card {
            margin-bottom: 20px; /* Adjust as needed */
            background-color: #fff; /* Card background color */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Card box shadow */
            overflow: hidden;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .info-line {
            height: 1px;
            background-color: #3490dc; /* Line color */
            margin: 10px 0; /* Adjust as needed */
        }

        .card-text {
            margin-bottom: 8px;
        }

        h5{
            color: #3490dc;
        }
        .container-cards {
            margin-bottom: 60px;
            background-color: #f8f9fa;
            margin-top: 100px;
            padding: 20px; /* Add padding for better spacing */
            display: flex;
            flex-wrap: nowrap; /* Prevent wrapping to the next line */
            overflow-x: auto; /* Enable horizontal scrolling if needed */
        }

        .card {
            margin-right: 20px; /* Adjust margin as needed */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            flex: 0 0 auto; /* Allow the card to shrink */
        }

        .container-cards {
            margin-bottom: 60px;
            background-color: #f8f9fa;
            margin-top: 100px;
            padding: 20px; /* Add padding for better spacing */
            display: flex;
            flex-wrap: wrap; /* Allow wrapping to the next line */
            justify-content: space-between; /* Distribute items evenly */
        }

        .card {
            width: calc(33.3333% - 20px); /* Adjust width and margin as needed */
            margin-bottom: 20px; /* Adjust margin as needed */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
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
    <div class="container-cards">
        @foreach($users as $user)
            <div class="card">
                @if ($user->image)
                    <img src="data:image/jpeg;base64,{{ base64_encode($user->image) }}" class="custom-image-size">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <div class="info-line"></div>
                    <p class="card-text">Location: {{ $user->location }}</p>
                    <p class="card-text">Practice areas: {{ $user->domaine }}</p>
                    <p class="card-text"> Email: {{ $user->email }}</p>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>