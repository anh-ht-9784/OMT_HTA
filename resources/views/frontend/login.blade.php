@extends('layout_fe.master')
@section('title')
    Đăng Nhập
@endsection

@section('header')
    @include('layout_fe.header')
@endsection
@section('content')



    <div class="" style=" width:50%; margin:auto;">

        <form id="form_login" method="post" action="">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">@lang('frontend.username')</label>
                <input type="text" name="username" id="username" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">@lang('frontend.password')</label>
                <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" id="btn_login" class="btn btn-primary">Đăng Nhập</button>

        </form>
        <div> Bạn chưa có tài khoản
            <a data-toggle="modal" href="#myModalss">Tạo tài khoản </a>
            ngay.

            <div class="modal fade" id="myModalss" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="title-user-form modal-title" id="exampleModalLabel">Tạo Mới Tài Khoản</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" id="user_create" action="" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_user" id="id_user">
                                <div class="mt-3">
                                    <label>Tài Khoản</label>
                                    <input class="mt-3 form-control" type="text" name="usernames" id="usernames" />
                                    <span class="text-danger" id="usernameError"></span>
                                </div>
                                <div class="mt-3" id="hiden_password">
                                    <label>Mật khẩu</label>
                                    <input class="mt-3 form-control" type="text" name="passwords" id="passwords" />
                                    <span class="text-danger" id="passwordError"></span>
                                </div>

                                <div class="mt-3">
                                    <label>Họ</label>
                                    <input class="mt-3 form-control" type="text" id="first_name" name="first_name" />
                                    <span class="text-danger" id="first_nameError"></span>
                                </div>
                                <div class="mt-3">
                                    <label>Tên đệm</label>
                                    <input class="mt-3 form-control" type="text" name="middle_name" id="middle_name" />
                                    <span class="text-danger" id="middle_nameError"></span>
                                </div>
                                <div class="mt-3">
                                    <label>Tên</label>
                                    <input class="mt-3 form-control" type="text" name="last_name" id="last_name" />
                                    <span class="text-danger" id="last_nameError"></span>
                                </div>
                                <div class="mt-3">
                                    <label>Ảnh đại diện</label>
                                    <input class="mt-3 form-control" type="file" name="avatar" id="avatar" /><br>
                                    <span class="text-danger" id="avatarError"></span>
                                </div>
                                <div class="mt-3">
                                    <label>Email</label>
                                    <input class="mt-3 form-control" type="email" name="email" id="email" />
                                    <span class="text-danger" id="emailError"></span>
                                </div>

                                <div class="mt-3">
                                    <label>Địa CHỉ</label>
                                    <input class="mt-3 form-control" type="text" name="address" id="address" />
                                    <span class="text-danger" id="addressError"></span>
                                </div>

                                <div class="mt-3">
                                    <label>Giới Tính</label>
                                    <select class="mt-3 form-control" name="gender" id="gender">
                                        <option value="1">
                                            Nam
                                        </option>
                                        <option value="2">
                                            Nữ
                                        </option>
                                    </select>
                                </div>

                                <div class="mt-3">
                                    <button id="btn_user_create" class="mt-3 btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#btn_login").on('click', function(event) {
                event.preventDefault();
                $dataLogin = {
                    username: $('#form_login #username').val(),
                    password: $('#form_login #password').val()
                }
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    url: "{{ route("auth.login") }}",
                    data: $dataLogin,
                    success: function(data) { 
                        if (data.status == 200) {
                            alert(data.message);
                            window.location.reload();
                        }else(
                            window.location = {{ route('frontend.index') }}
                        )
                    },
                    error: function(data) {
                    
                    }
                });
            })


            $("#btn_user_create").on('click', function(event) {
                event.preventDefault();
              $('.text-danger').text("");
                dataform = new FormData();
                dataform.append('avatar', $("#myModalss input[name='avatar']")[0].files[0]);
                dataform.append('first_name', $("#myModalss input[name='first_name']").val());
                dataform.append('middle_name', $("#myModalss input[name='middle_name']").val());
                dataform.append('last_name', $("#myModalss input[name='last_name']").val());
                dataform.append('username', $("#myModalss input[name='usernames']").val());
                dataform.append('email', $("#myModalss input[name='email']").val());
                dataform.append('address', $("#myModalss input[name='address']").val());
                dataform.append('password', $("#myModalss input[name='passwords']").val());
                dataform.append('_token', $("#myModalss input[name='_token']").val());
                console.log(dataform);
                $.ajax({
                    type: "post",
                    url: "{{ route('auth.register') }}",
                    data: dataform,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function(data) {
                        if (data.status == 200) {
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
            });





        });
    </script>
@endpush
