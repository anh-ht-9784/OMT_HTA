
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    



</head>

<body>
    <header>
        <div style="padding: 0 10rem 0 10rem;">
            <div class="top-header ">
                <div style="padding-left: 40px;">N Ộ I T H Ấ T N H Ậ P K H Ẩ U S T O R E</div>
                <div class="text-right" style="padding-right: 40px;">HOTLINE : +085878083222</div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="">N Ộ I T H Ấ T N H Ậ P K H Ẩ U S T O R E</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="">SẢN PHẨM <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">THƯƠNG HIỆU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">LIÊN HỆ</a>
                        </li>
                    </ul>
                    <div class="login-header">
                    <i class="fad fa-camera"></i>
                        
                        <a href="" class="text-decoration" style="padding-right: 5px;">Đăng Nhập</a>
                    </div>
                </div>
        </div>
        </nav>
    </header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/banner1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/banner3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/banner2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <article>
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
    <footer style="padding-top:2rem;" >
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="" class="text-reset">Trang Chủ</a></li>
                        <li class="list-group-item"><a href="" class="text-reset">Sản Phẩm</a></li>
                        <li class="list-group-item"><a href="" class="text-reset">Giới Thiệu</a></li>
                        <li class="list-group-item"><a href="" class="text-reset">Liên Hệ</a></li>

                    </ul>
                </div>
                <div class="col-md-3 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="" class="text-reset">Hướng Dẫn mua Hàng</a></li>
                        <li class="list-group-item"><a href="" class="text-reset">Chính Sách Đổi Trả</a></li>
                        <li class="list-group-item"><a href="" class="text-reset">Câu Hỏi Thường Gặp</a></li>

                    </ul>
                </div>
                <div class="col-md-3 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Phương Thức Thanh Toán</li>
                        <div class="foot-icon row">
                        <img class="col-md-4" src="https://onlinestore.thaicong.com/wp-content/themes/thaicong/assets/images/icon/ic_visa.svg" >
                        <img class="col-md-4" src="https://onlinestore.thaicong.com/wp-content/themes/thaicong/assets/images/icon/ic_mscard.svg" >
                       
                        </div>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Phương Tiện Kết Nối</li>
                        <div class=" foot-icon row">                           
                        <img class="col-md-3" src="https://onlinestore.thaicong.com/wp-content/themes/thaicong/assets/images/icon/ic_fb.svg" >
                        <img class="col-md-3" src="https://onlinestore.thaicong.com/wp-content/themes/thaicong/assets/images/icon/ic_insta.svg" >
                        <img class="col-md-3" src="https://onlinestore.thaicong.com/wp-content/themes/thaicong/assets/images/icon/ic_ytb.svg" >
                        <img class="col-md-3" src="https://onlinestore.thaicong.com/wp-content/themes/thaicong/assets/images/icon/ic_fb.svg" >
                        </div>
                    </ul>
                    <div style="padding-top:1rem ;">
                        <form action="">
                            <label for="">Nhận tin tức</label> <br>
                            <input type="email">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-tt">
        <p class="container">
        Chính Sách | Quy Chế Hoạt Động | Điều Khoản và Điều Kiện | Chủ Sở Hữu
        </p>
    </div>


</body>

</html>