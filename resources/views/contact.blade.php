    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
        <title>Document</title>
    <style>
        *{
            font-family: sans-serif;

        }

        nav{
            margin-right: 12px;
        }

        

        .comments-section {
        margin-top: 15px;
        margin-left: 25px
    }

    .comments-heading {
        color: #333;
        font-weight: bold;
        font-size: 16px;
    }

    .comments-list {
        list-style-type: none;
        padding: 0;
    }

    .comment-item {
        border-bottom: 1px solid #ddd;
        padding: 10px;
    }

    .comment-content {
        display: block;
        color: #555;
    }

    .comment-author {
        color: #888;
        font-size: 12px;
    }

    .user-profiles {
        text-align: center; /* Center-align the user cards */
    }

    .user-card {
        display: inline-block; /* Display user cards in the same line */
        border: 1px solid #ddd;
        padding: 15px;
        margin: 10px;
        text-align: center;
    }

    .user-name {
        font-weight: bold;
        color: #333;
    }

    .user-profession {
        color: #888;
        margin-top: 5px;
    }
    #avocatlink{
        text-decoration: none;
        background-color: #3490dc;
    }

    a{
        text-decoration: none;
        color: white; 
    }

    p{
        margin-top: 85px;
        margin-left: 85px;

    }
    h1{
        margin-top: 99px;
    }
    h3{
        margin-top: 299px;
        margin-left: 305px;
    }

    #welcome-message {
        margin-top: 99px;
        margin-left: 120px;
        font-size: 40px;    
    }

    #ask-question-link {
        text-decoration: none;
    }

    #Q-A{
        display: flex;
    }

    #Q-A p{
        margin-right: 60px;
        font-size: 25px;

    }

    #Q-A img{
        margin-right: 60px;
        margin-top: 60px;

    }

    #ask{
        color: white;
        margin-left: 81px;
        margin-top: 30px;
    }

    #ask button {
        border-radius: 30px;
    }

    #ask button {
        transition: box-shadow 0.3s ease; 
    }

    #ask button:hover {
        box-shadow: 0 0 11px rgba(0, 0, 0, 0.2); 
    }
    </style>
    </head>
    <body>
        <nav class="nav">
            <div>
                <a href=""><img src="/images/avocat-conseil-enligne.png"></a>
            </div>
            <div style="display: flex; align-items: center;">
                {{-- <a href="{{ url('/') }}">HOME</a> --}}
                <a href="{{ route('contact') }}">QUESTIONS</a>
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
        
       
       
        @if ($ideas->count() > 0)
        <button >
            <form method="POST" action="{{ route('storeIdea') }}" class="idea-form">
            @csrf
                <a href="{{ route('ajout') }}">ADD QUESTION</a>
            </form>
        </button>
        @endif
        <div id="welcome-message">
            <h2>Welcome ! Feel free to ask any question.</h2>
        </div>
        <div id="Q-A">
            <p>Our team is here to assist you. Ask about legal matters, get advice, or seek information,
            We're delighted to have you here. Whether you're facing legal uncertainties or simply seeking guidance,
            our team of experienced professionals is ready to assist you.
            Feel free to ask any legal questions you may have. From general inquiries to specific case details,
            Your questions are important to us, and we understand the significance of legal matters in your life. 
            Rest assured that your queries will be handled with care and confidentiality. 
            Once submitted, our team will review them promptly, and you can expect to receive comprehensive advice tailored to your situation.
            Thank you for choosing our platform. We look forward to helping you navigate the complexities of the legal world and providing the support you need.</p>
            <img src="https://t3.ftcdn.net/jpg/02/14/40/92/360_F_214409262_ZJh28hhHGY8fkPfY3UpxKKZBjup9kRkA.jpg" alt="">
        </div>
        
        <div id="ask">
            <a href="{{ route('ajout') }}"><button>Ask a Question</button></a>
        </div>
  
     
        @if ($ideas->count() > 0)
        <h1> YOUR QUESTIONS : </h1>

        @foreach ($ideas->sortByDesc('created_at') as $idea)
            <div class="cart-item">
                <h5 style="margin-bottom: 10px; ">The Case : {{ $idea->case}}</h5>
                <p>{{ $idea->content }}</p>
                <p id="By">By: {{ optional($idea->utilisateur)->name }}</p>
                <div class="svgs">
                    <a href="{{ route('questions.editer', ['idea' => $idea->id]) }}" id="pencil">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/>
                        </svg>
                    </a>
                    <form action="{{ route('idea.destroy', ['idea' => $idea->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button id="trash" type="submit"><svg  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                    
                    </form>
                </div>
            </div>
            @if ($idea->comments->count() > 0)
                <div class="comments-section">
                    <strong class="comments-heading">Comments:</strong>
                    <ul class="comments-list">
                        @foreach ($idea->comments->sortByDesc('created_at') as  $comment)
                            <li class="comment-item">
                                <span class="comment-content">{{ $comment->content }}</span>
                                <span class="comment-author">By: {{ $comment->user->name }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endforeach
        @endif



    </body>
    </html>