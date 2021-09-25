@extends('layout_fe.master')
@section('title')
    Đăng Nhập
@endsection

@section('header')
    @include('layout_fe.header')
@endsection
@section('content')
    <div>
        {{-- @if (session()->has('error') === true)
  <div class="alert alert-danger">
      {{ session()->get('error') }}
  </div>
@endif --}}
        <form method="post" action="">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="username" id="username" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" id="btn_login" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#btn_login").on('click', function(event) {
                event.preventDefault();
                $data = {
                    username: $('#username').vla(),
                    password: $('#password').val()
                }
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    url: "{{ route('auth.login') }}",
                    data: ,
                    success: function(data) {
                        alert(data.data);
                        window.location.reload();
                    }
                });
            });
        });
    </script>
@endpush
