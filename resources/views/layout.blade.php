<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<style>
    .ellipsis {
        max-width: 40px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }

    table tbody td a .fa-minus-circle{
        color: #dc3545;
    }

    table tbody td a .fa-edit{
        color: #ffc107;
    }

    .edit-project-icon{
        color: #343a40;
    }

    .row div a .fa-edit{
        color: #343a40;
    }

    .btn-round{
        width: 30px;
        height: 30px;
        padding: 6px 0px;
        border-radius: 15px;
    }

    .del-text {
        text-decoration: line-through;
    }

</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Laravel Project</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('projects.index') }}">Home</a>
                    </li>
                </ul>
        </div>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>