

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- CSS And JavaScript -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/dist/css/bootstrap.min.css')}}">
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
                <p class="navbar-text">Signed in as Nirvik Khanal</p>
            </nav>
        </div>

        @yield('content')
    </body>
</html>