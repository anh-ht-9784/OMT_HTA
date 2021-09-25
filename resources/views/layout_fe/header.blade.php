<div class="row" style="padding: 0 10rem 0 10rem;">
    <div class="col-md-2">
        <img src="image/logo/gamek.png" height="100rem">
    </div>
    <div class="col-md-10">
        <div class="top-header ">
            <div style="padding-left: 40px;">@lang('KÊNH GAME SỐ 1 VIỆT NAM')</div>
            <div class="text-right" style="padding-right: 40px;">@lang('HOTLINE') : +085878083222</div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light ">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="">@lang('GAME MOBILE') <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">@lang('ESPORTS')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">@lang('KHÁM PHÁ')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">@lang('TIN TỨC')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">@lang('CỘNG ĐỒNG')</a>
                    </li>
                </ul>
                <div class="login-header">
                    <i class="fad fa-camera"></i>

                    {{-- <a href="" class="text-decoration" style="padding-right: 5px;">@lang('Đăng Nhập')</a> --}}
                    {{-- //login --}}
                    @if (Auth::check() == false)
                    <a href="{{ route('frontend.login') }}" class="login" >Login</a>  
                    @else
                    <a href="{{ route('auth.logout') }}" class="login" >Logout</a> 
                    {{-- {{var_dump(Auth::user()->email)}}  --}}
                    @endif
                   
                 {{-- end --}}
                </div>
            </div>
    </div>
    </nav>
</div>
