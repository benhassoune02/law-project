<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customized Navigation</title>
    <style>
        *{
            font-family: sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: rgba(4, 115, 234, 0.89);
            
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px; /* Adjust the spacing between links */
            font-size: 16px; /* Adjust the font size */
        }

        .navbar .logo {
            /* Add styling for the logo */
        }

        .navbar a.active {
            font-weight: bold;
            /* Add any other styles for the active link */
        }

        /* Add styles for the client-links and avocat-links */
        .client-links, .avocat-links {
            display: flex;
            margin-top: 85px;
            gap: 15px;
        }

        .client-links a,
        .avocat-links a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }
        
    </style>
</head>
<body>
    
    @include('newdash')

    <div class="navbar">
        <div class="client-links">
            @if (Route::has('login_page'))
                <a href="{{ route('login_page') }}">Sign in (Client)</a>
            @endif
        </div>

        
    </div>
    @include('imageslider')

</body>
</html>