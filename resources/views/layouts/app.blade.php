<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Operations</title>

        <!-- bootstrap minified css -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- bootstrap minified js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- custom CSS -->
        <style>
        th{
            background-color: #C5CAE9;
        }

        td{
            border-top: 1px solid #883344;
            background-color: #E3F2FD;

        }

        td .btn{
            height: 22px;
            padding: 0;

        }
        </style>
    </head>

    <body>
        <div class="container">
            <h1 style="text-align: center;">Operations</h1>
            @yield('content')
        </div>
    </body>
</html>
