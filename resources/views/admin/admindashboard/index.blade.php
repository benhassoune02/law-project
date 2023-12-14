<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel - Dashboard</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Font Awesome CSS for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        #sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            background-color: #343a40; /* Bootstrap dark background color */
            padding-top: 20px;
            color: white;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

        .sidebar-heading {
            font-size: 1.2rem;
            padding: 0 1rem;
        }

        .nav-link {
            color: #fff;
            padding: 10px 1rem;
            font-weight: 500;
        }

        .nav-link:hover {
            background-color: #495057;
        }

        .active {
            background-color: #007bff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-delete {
            background-color: #dc3545;
            color: #fff;
            border: none;
        }
        h3{
            margin-left: 404px;
        }
        .dashboard-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    
    }

    .dashboard-card {
        background-color: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 300px;
        margin: 20px;
    }

    h2 {
        color: #007bff;
    }

    p {
        font-size: 1.5em;
        color: #555;
    }
    .dashboard-title {
        font-size: 2em;
        color: #007bff;
        text-align: center;
        margin-bottom: 20px;
    }
    .dashboard-title {
        font-size: 2em;
        color: #007bff;
        text-align: center;
        margin-bottom: 20px;
    }

    .dashboard-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .dashboard-card {
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 300px;
        margin: 20px;
        transition: transform 0.3s ease-in-out;
    }

    .dashboard-card:hover {
        transform: scale(1.05);
    }

    h2 {
        color: #007bff;
    }

    p {
        font-size: 1.5em;
        color: #555;
    }
    </style>
</head>

<body>
    <div id="sidebar">
        <h2 class="sidebar-heading">Admin Panel</h2>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.utilisateurs.index') }}"><i class="fas fa-users mr-2"></i>Utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.adminquestions.index') }}">
                    <i class="fas fa-question-circle mr-2"></i>Questions
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.adminusers.index') }}"><i class="fas fa-users mr-2"></i>Lawyers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.admincomments.index') }}"><i class="fas fa-reply mr-2"></i>  Answers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin-dashboard') }}"><i class="fas fa-chart-line mr-2"></i>  Dashboard</a>
            </li>
            <li class="nav-item">
                @auth('admin')
                <form action="{{route('admin-logout')}}" method="POST" class="">
                @csrf
                <button type="submit" style="cursor: pointer; margin-top: 400px; background-color: #3490dc; color: #fff; border: none; padding: 5px 10px; border-radius: 3px;">LOGOUT</button>
                </form>
                @endauth
            </li>
        </ul>
    </div>

    <div id="content">
        <div class="dashboard-container">
            <div class="dashboard-card">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                <h2>Lawyers</h2>
                <p>{{ $userCount }}</p>
            </div>

            <div class="dashboard-card">
                <i class="fas fa-question-circle"></i>
                <h2>Questions</h2>
                <p>{{ $questionCount }}</p>
            </div>

            <div class="dashboard-card">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                <h2>Utilisateurs</h2>
                <p>{{ $lawyerCount }}</p>
            </div>

            <div class="dashboard-card">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"/></svg>
                <h2>Answers</h2>
                <p>{{ $commentCount }}</p>
            </div>

        </div>

    </div>
    

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Add Font Awesome JS for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
</body>

</html>