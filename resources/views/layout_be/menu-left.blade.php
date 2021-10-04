
<div class=" col-lg-3 col-xl-2 col-md-4 sidebar fixed-top">
    <a href="{{ route('frontend.index') }}" class="navbar-brand text-white d-block mx-auto  mb-4 bottom-border pb-2">
        <span class="material-icons" >
            home
            </span>
            Trang chủ
    </a>
 
    <img src="/image/product/{{ Auth::user()->avatar }}" width="50"height="50" alt="nice" class="rounded-circle mr-3">
    <a href="#" class="text-white "><strong>{{ Auth::user()->username }}</strong> </a>
    <div class="text-center border-bottom pb-3"></div>
    <ul class="navbar-nav flex-column mt-4">
        @can('create_user')
        <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-user text-light fa-lg mr-3" aria-hidden="true"></i><b>@lang('layoutBe.users')</b>
            </a>
        </li>
        @endcan
        <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-envelope text-light fa-lg mr-3" aria-hidden="true"></i> @lang('layoutBe.post')
            </a>
        </li>
       
    </ul>
</div>
