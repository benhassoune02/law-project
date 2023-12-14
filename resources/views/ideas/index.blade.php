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
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    h1{
        background: #666;
        color: #fff;
        margin-bottom: 22px;
    }

    header {
        background-color: #3490dc;
        color: #fff;
        padding: 10px;
        text-align: center;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .cart-item-link {
        text-decoration: none;
        color: #3490dc;
        display: block;
        margin-bottom: 20px;
    }

    .cart-item {
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 5px;
    }

    .cart-item h2 {
        margin: 0;
        font-size: 18px;
    }

    .cart-item p {
        color: #666;
    }
    .delete-button {
        background-color: #dc3545; /* Use a color of your choice */
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 3px;
        cursor: pointer;
        font-size: 14px;
        margin-bottom: 22px;
    }

    /* Add this style if you want to change the cursor on hover */
    .delete-button:hover {
        background-color: #c82333; /* Use a slightly darker shade for hover effect */
    }
</style>
<body>

    @extends('contact-user')

    @section('content')
    <h1>QUESTIONS OF SOME USERS</h1>

    @foreach ($ideas->sortByDesc('created_at') as $idea)
        <div class="cart-item">
                <h4 style="margin-bottom: 20px;">The case : <p>{{ $idea->case }}</p></h4>
                    <p>{{ $idea->content }}</p>
                <p id="By">By: {{ optional($idea->utilisateur)->name }}</p>
                <a href="{{ route('idea.show', ['id' => $idea->id]) }}" class="cart-item-link">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"/></svg>
                </a>
        </div> 
       
        
        
    @endforeach
    @endsection
</body>
</html>