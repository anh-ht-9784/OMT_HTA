@extends('layout_fe.master')
@section('title')
    @lang('frontend.resetPass')
@endsection

@section('header')
    @include('layout_fe.header')
@endsection
@section('content')

    <div class="" style=" width:50%; margin:auto;">

        <form id="resetPassword" method="post" action="">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">@lang('frontend.old_pass')</label>
                <input type="text" name="oldpass" id="oldpass" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">@lang('frontend.new_pass')</label>
                <input type="password" name="newpass" id="newpass" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nhập lại @lang('frontend.new_pass')</label>
                <input type="password" name="newpass2" id="newpass2" class="form-control" id="exampleInputPassword1">
                <span class="text-danger" id="errorPass"></span>
            </div>
            <button id="reset_pass" class="btn btn-primary">@lang('frontend.resetPass')</button>

        </form>

    </div>

@endsection
@push('script')
    <script type="text/javascript">
        $("#reset_pass").on('click', function(event) {
            event.preventDefault();
            $('#errorPass').text("")
            if ($('#newpass').val() != $('#newpass2').val()) {
                $('#errorPass').text("Mật Khẩu Mới Không Giống")
            } else {
                $data = {
                    'newpass': $('#newpass').val(),
                    'password': $('#oldpass').val(),
                }
                console.log($data);
                $.ajax({
                    type: "post",
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    url: "{{ route('auth.uploadpassword') }}",
                    data: $data,
                    dataType: "json",
                    success: function(data) {
                        if (data.status == 200) {
                            alert(data.message);
                            window.location = "{{ route('frontend.index') }}"
                        }
                        if (data.status == 100) {
                            alert(data.message);
                            window.location.reload();
                        }


                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        if ($.isEmptyObject(errors) == false) {
                            $.each(errors.errors, function(key, value) {
                                var ErrorID = '#myModalss #' + key + 'Error';
                                $(ErrorID).text(value);
                                console.log(ErrorID);
                            })
                        }
                    }
                });
            };
        });
    </script>

@endpush
