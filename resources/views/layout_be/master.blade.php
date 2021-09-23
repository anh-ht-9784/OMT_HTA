<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    @include('layout_be.custom-css')
</head>

@yield('css')

<body>
    <header>
        @yield('header')

    </header>

    <div class="row" style="min-height: 580px">


        <div class="menu-left col-2">
            @include('layout_be.menu-left')
        </div>
        <div class="col-10">
            @yield('body-title')
            @yield('content')
        </div>
    </div>
    <footer>
        @include('layout_be.footer')
    </footer>
 
    @include('layout_be.custom-js')
   
    @stack('script')
</body>

</html>
