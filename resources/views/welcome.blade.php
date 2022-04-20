<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <meta name="csrf-token" value="{{ csrf_token() }}" />
        
        <!-- Styles -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        <!-- FOR CLIENT -->            
            <!-- Favicon  -->
        <link rel="icon" href="../../assets/img/core-img/favicon.ico">
            <!-- Core Style CSS -->
        <link rel="stylesheet" href="../../assets/css/core-style.css">
        <link rel="stylesheet" href="../../assets/style.css">
            <!-- Responsive CSS -->
        <link href="../../assets/css/responsive.css" rel="stylesheet">


    </head>
    <body>
        <div id="app">
          <example-component></example-component>
        </div>
        
        <!-- Script -->
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

        <!-- FOR CLIENT -->
            <!-- jQuery (Necessary for All JavaScript Plugins) -->
        <script src="../../assets/js/jquery/jquery-2.2.4.min.js"></script>
            <!-- Popper js -->
        <script src="../../assets/js/popper.min.js"></script>
            <!-- Bootstrap js -->
        <script src="../../assets/js/bootstrap.min.js"></script>
            <!-- Plugins js -->
        <script src="../../assets/js/plugins.js"></script>
            <!-- Active js -->
        <script src="../../assets/js/active.js"></script>

    </body>
</html>