<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-family:  sans-serif;
        font-size: 16px;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

   .nav{
        margin-left:42px; 
        padding: 10px;
    }
</style>
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
</body>
</html>