<div class="row" style="padding: 0 10rem 0 10rem;">
    <div class="col-md-2">
        <a href="{{ route('frontend.index') }}"><img src="{{ asset('image/logo/gamek.png') }}" height="100rem"></a>
    </div>
    <div class="col-md-10">
        <div class="top-header ">
            <div style="padding-left: 40px;">@lang('layoutFe.header.title')</div>
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
                        <a class="nav-link" href="">@lang('layoutfe.footer.gameMobile')<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">@lang('layoutfe.footer.esport')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">@lang('layoutfe.header.discover')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">@lang('layoutfe.footer.news')</a>
                    </li>
                    @if (Auth::check() == true)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.editAccount') }}">@lang('layoutfe.header.me')</a>
                    </li>
                    @endif
                </ul>
                <div class="login-header">
                    <i class="fad fa-camera"></i>
                    @if (Auth::check() == true)


                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    <strong>@lang('layoutfe.header.account')</strong>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="navbar-login">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <p class="text-center">
                                                        <img src="/image/product/{{ Auth::user()->avatar }}"
                                                            width="80" height="80" alt="nice"
                                                            class="rounded-circle mr-3">
                                                    </p>
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text-left">
                                                        <strong>{{ auth::user()->username }}</strong>
                                                    </p>
                                                    <p class="text-left small">{{ auth::user()->email }}</p>
                                                    <p class="text-left">
                                                        @can('show_post')
                                                        <a class="btn btn-primary btn-block btn-sm"
                                                            href="{{ route('admin.post.index') }}"
                                                            class="login">@lang('layoutfe.header.admin')
                                                        </a>
                                                    @endcan
                                                        <a class="btn btn-primary btn-block btn-sm"
                                                        href="{{ route('resetPassword') }}"
                                                        class="login">
                                                        @lang('frontend.resetPass')
                                                    </a>
                                                     
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="navbar-login navbar-login-session">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p>
                                                        <a href="{{ route('auth.logout') }}"
                                                            class="btn btn-danger btn-block">@lang('layoutfe.header.logout')</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <a href="{{ route('frontend.login') }}"
                            class="login">@lang('layoutfe.header.login')</a>
                    @endif

                    {{-- end --}}
                </div>

            </div>
    </div>
    </nav>
</div>


<!-- Button trigger modal -->

  
 