<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <title>Document</title>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa; /* Set your desired background color */
        }

        #navbarNav{
            margin-top: 20px;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 220px; /* Adjust the width as needed */
            padding-top: 56px; /* Set the same value as the navbar height */
            background-color: #343a40; /* Set your desired sidebar background color */
            color: #fff; /* Set your desired text color */
        }

        .main-content {
            margin-left: 220px; /* Set the same value as the sidebar width */
            padding: 20px;
        }

        .container{
            margin-left: 255px;
        }
</style>
<script>

    function editComment(commentId) {
        window.location.href = `/comments/${commentId}/edit`;
    }

</script>
</head>
<body> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-user') }}">Ideas</a>
                </li>
                
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn ">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="sidebar">
        <ul class="nav flex-column">
            <!-- Sidebar content goes here -->
        </ul>
    </div>
    
    <div class="main-content">
        @yield('content')   
    </div>

    <div class="container">
        <h2>{{ $idea->content }}</h2>
        <p id="By">By: {{ optional($idea->utilisateur)->name }}</p>
    
        <form action="{{ route('comment.store', ['idea' => $idea->id]) }}" method="POST"  class="comment-form">
            @csrf
            <label for="comment">Add a Comment:</label>
            <textarea name="comment" id="comment" rows="3" required></textarea>
            <button type="submit" id="submit">Submit Comment</button>
        </form>
        @if ($idea->comments->count() > 0)
            <div class="comments">
                <h3>Comments:</h3>
                @foreach ($idea->comments->sortByDesc('created_at') as $comment)
                    <div class="comment-box">
                        <p class="comment-content"> {{ $comment->content }}</p>
                        <p class="comment-user"> By: {{ $comment->user->name }}</p>
                        <div class="svgs">
                            @if(auth()->check() && auth()->user()->id === $comment->user_id)
                                <button id="pencil"><svg onclick="editComment({{ $comment->id }})" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></button>
    
                                <form action="{{ route('comment.destroy', ['comment' => $comment->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button id="trash" type="submit"><svg  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>












