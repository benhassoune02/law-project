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

        .glide {
            width: 100%;
            overflow: hidden;
            margin-top: 85px;
        }

        .glide__track {
            width: 100%;
            overflow: hidden;
        }

        .glide__slides {
            display: flex;
            list-style: none; /* Remove list style */
            padding: 0; /* Remove default padding */
            margin: 0; /* Remove default margin */
        }

        .glide__slide {
            flex: 0 0 auto;
            margin-right: 20px; /* Adjust as needed */
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
    <div class="container mt-5">
        <h1 class="text-center">Our Team</h1>

        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    @foreach($users as $user)
                        <li class="glide__slide">
                            <div class="card mx-auto mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    <div class="info-line"></div> 
                                    <p class="card-text"><strong>Location:</strong> {{ $user->location }}</p>
                                    <p class="card-text"><strong>Practice areas:</strong> {{ $user->domaine }}</p>
                                    <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Include Glide.js -->
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

    <!-- Initialize Glide.js -->
    <script>
        new Glide('.glide', {
            type: 'carousel',
            perView: 3, // Adjust the number of visible slides
            focusAt: 'center',
            breakpoints: {
                768: {
                    perView: 1
                }
            }
        }).mount();
    </script>

</body>

</html>