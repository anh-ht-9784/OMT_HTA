<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="{{asset('public/css/main.css')}}" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">




</head>
@include('layout_fe.custom-css')
@yield('css')
<body style="background-color: #F0F0F0;">
    <header>
        @yield('header')
      
    </header>
    <div class="image-banner container" >
    <img  src="image/banner4.jpg" width="100%" height="">
    </div>
    <article class="container">
        @yield('content')
    </article>
    <div style="padding-top:5rem;background-color: #F0F0F0;"></div>
    <div class="list-group-logo" style="background-color: #F0F0F0;">
        <div class="container">
            <div class="row">
                <div class="group-logo col-md-3 col-sm-12">
                    <img src="image/logo/baccarat-logo.jpg" width="100%" alt="" srcset="">
                </div>
                <div class="group-logo col-md-3 col-sm-12">
                    <img src="image/logo/baccarat-logo.jpg" width="100%" alt="" srcset="">
                </div>
                <div class="group-logo col-md-3 col-sm-12">
                    <img src="image/logo/baccarat-logo.jpg" width="100%" alt="" srcset="">
                </div>
                <div class="group-logo col-md-3 col-sm-12">
                    <img src="image/logo/baccarat-logo.jpg" width="100%" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <footer style="padding-top:2rem;">
        @include('layout_fe.footer')
    </footer>
    <div class="footer-tt">
        <p class="container">
            @lang('   Chính Sách | Quy Chế Hoạt Động | Điều Khoản và Điều Kiện | Chủ Sở Hữu')
        </p>
    </div>


    @include('layout_fe.custom-js')
    @yield('js')
</body>

</html>
