<!DOCTYPE html>
<html>
    <head>
        <title>News</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            html, body {
                height: 100%;
                background-color: #cecece;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: Lato, serif;
            }

            .container {
                text-align: center;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: block;
            }

            .title {
                font-size: 50px;
            }
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>