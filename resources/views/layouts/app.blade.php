<html lang="en">        
<head>
    {{--Aqui agrego el Bootstrap  --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>LaraDex - @yield('title')</title> <!--Con yield creamos un espacio title que sera modificable y se rellenen desde sus vistas-->
</head>

<body>
        <nav class="navbar navbar-dark bg-primary">
            <a href="#" class="navbar-brand">LaraDex</a>
        </nav>
        <div class="container">
            @yield('content')
        </div>
</body>

</html>