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
        h2{
            margin-left: 404px;
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
    </style>
</head>

<body>
    <div id="sidebar">
        <h1 class="sidebar-heading">Admin Panel</h1>
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
                <a class="nav-link active" href="{{ route('admin.adminusers.index') }}"><i class="fas fa-users mr-2"></i>Lawyers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.admincomments.index') }}"><i class="fas fa-reply mr-2"></i> Answers</a>
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
        <div class="container">
            <h2>Add Lawyer</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        
            <form method="POST" action="{{ route('admin.addUser') }}"  enctype="multipart/form-data" class="form">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
        
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
        
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
        
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" name="location" class="form-control" required>
                </div>
        
                <div class="form-group">
                    <label for="domaine">Domaine:</label>
                    <select name="domaine" class="form-control" required>
                        <option value="crime">CRIME</option>
                        <option value="family">FAMILY</option>
                        <option value="divorce">DIVORCE</option>
                        <option value="business">BUSINESS</option>
                        <option value="immigration">IMMIGRATION</option>
                        <option value="commercial">COMMERCIAL</option>
                        <option value="injury">INJURY</option>
                        <option value="federal_crime">FEDERAL CRIME</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" class="form-control">
                </div>
        
                <button type="submit" class="btn btn-primary">Add User</button>
            </form>
        </div>
    
        <h2>LAWYERS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>LOCATION</th>
                    <th>DOMAINE</th> 
                    <th>Action</th>                                       
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->location }}</td>
                    <td>{{ $user->domaine }}</td>
                    <td>
                        <form action="{{ route('user.destroy', ['id' => $user->id]) }}"
                            method="post" onsubmit="return confirm('Are you sure you want to delete this utilisateur?')">
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