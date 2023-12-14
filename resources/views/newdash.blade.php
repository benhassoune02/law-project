<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/newdash.css') }}">
    <title>Document</title>
</head>

<body>
    <nav class="nav">
        <div>
            <a href=""><img src="/images/avocat-conseil-enligne.png"></a>
        </div>
        <div style="display: flex; align-items: center;">
            <a href="{{ url('/') }}">HOME</a>

            <a href="" onclick="scrollToSection('about', event)">ABOUT</a>
            <a  href="{{ route('lawyers') }}">LAWYERS</a>
            <a  href="{{ route('contact') }}">QUESTIONS</a>
            @auth('utilisateur')
                <a href="{{ route('edit_profile') }}">MY PROFIL</a>
             @endauth
            @auth('utilisateur')
                <form action="{{ route('utilisateur-logout') }}" method="POST" class="">
                    @csrf
                    <button type="submit" style="cursor: pointer; background-color: #3490dc; color: #fff; border: none; padding: 5px 10px; border-radius: 3px;">LOGOUT</button>
                </form>
             @endauth
        </div>
    </nav>
    
    
</body>
</html>