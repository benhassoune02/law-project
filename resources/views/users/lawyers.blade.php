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
            margin-left: 12px;

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
    <form action="{{ route('lawyers.search') }}" method="GET" style="text-align: center; margin-top: 80px;">
        <input type="text" name="query" placeholder="Search by name, location, etc." required 
            style="padding: 10px; width: 50%; border-radius: 5px; border: 1px solid #ddd; margin-right: 10px;">
        <button type="submit" style="padding: 10px 20px; background-color: #3490dc; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Search
        </button>
    </form>
    <div class="container-cards">
        @foreach($users as $user)
            <div class="card">
                @if ($user->image)
                    <img src="{{ asset($user->image) }}" class="custom-image-size">
                @endif
                <div class="card-body">
                    <div style="display: flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 3px;" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7H162.5c0 0 0 0 .1 0H168 280h5.5c0 0 0 0 .1 0H417.3c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2H224 204.3c-12.4 0-20.1 13.6-13.7 24.2z"/></svg>
                        <h5 class="card-title">{{ $user->name }}</h5>
                    </div>
                    <div class="info-line"></div>
                    <div style="display: flex; align-items: center;"> 
                        <svg height="16" width="12" viewBox="0 0 384 512" style="margin-right: 8px; margin-bottom: 10px;" xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                        <p class="card-text" style="margin-bottom: 7px; margin-left: 6px;">Location: {{ $user->location }}</p>
                    </div>
                    <div style="display: flex; ">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"/></svg>
                        <p class="card-text" style="margin-left: 10px;">Practice areas: {{ $user->domaine }}</p>
                    </div>
                    <div style="display: flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2 0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.3-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9l0 0 0 0-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z"/></svg>
                        <p class="card-text" style="margin-left: 7px;">Number of Contributions: {{ $user->contributions_count }}</p>
                    </div>
                    <div style="display: flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                        <p class="card-text" style="margin-left: 11px;">Email: {{ $user->email }}</p>
                    </div>
                    <div style="display: flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                        <p class="card-text" style="margin-left: 11px;">N°de télephone: {{ $user->telephone }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>