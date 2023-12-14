<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel - Utilisateurs</title>
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
        h3{
            margin-left: 500px;

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
    </style>
</head>

<body>
    <div id="sidebar">
        <h2 class="sidebar-heading">Admin Panel</h2>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.utilisateurs.index') }}"><i class="fas fa-users mr-2"></i>Utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.adminquestions.index') }}">
                    <i class="fas fa-question-circle mr-2"></i>Questions
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.adminusers.index') }}"><i class="fas fa-users mr-2"></i>Lawyers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.admincomments.index') }}"><i class="fas fa-reply mr-2"></i> Answers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin-dashboard') }}"><i class="fas fa-chart-line mr-2"></i>  Dashboard</a>
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
    
        <h3>Answers</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Content</th>
                    <th>Lawyers</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->user->name }}</td>
                    <td>
                        <form action="{{ route('comment.destroy', [$comment->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Add Font Awesome JS for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
</body>

</html>