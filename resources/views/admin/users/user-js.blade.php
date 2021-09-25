<script>
    function myFunction() {

        var title_modal = document.getElementsByClassName("title-user-form");
        title_modal[0].innerHTML = "Thêm Thông Tin Người Dùng";
        // đổi id button
        $("#modal_create .btn-form-create")[0].id = "btn-form-create";
        $("#modal_create #form-image").hide();


        $("#btn-form-create").on('click', function(event) {
            event.preventDefault();
            dataform = new FormData();
            dataform.append('avatar', $("#modal_create input[name='avatar']")[0].files[0]);
            dataform.append('first_name', $("#modal_create input[name='first_name']").val());
            dataform.append('middle_name', $("#modal_create input[name='middle_name']").val());
            dataform.append('last_name', $("#modal_create input[name='last_name']").val());
            dataform.append('username', $("#modal_create input[name='username']").val());
            dataform.append('email', $("#modal_create input[name='email']").val());
            dataform.append('address', $("#modal_create input[name='address']").val());
            dataform.append('password', $("#modal_create input[name='password']").val());
            dataform.append('gender', $("#modal_create select[name='gender']").val());
            dataform.append('_token', $("#modal_create input[name='_token']").val());
            $.ajax({
                type: "post",
                url: "http://omt.test/admin/users/store",
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
                            var ErrorID = '#modal_create #' + key + 'Error';
                            $(ErrorID).text(value);
                            console.log(ErrorID);
                        })
                    }
                }
            });
        });
    }
 
   
    $(".modal_user_edit").on('click', function(event) {
        var title_modal = document.getElementsByClassName("title-user-form");
        title_modal[1].innerHTML = "Cập Nhật Thông Tin Người Dùng";
        // đổi id button
        $(".btn-form-create")[1].id = "btn-form-upload"
        $("#modal_edit #hiden_password").hide();




        var url = "http://omt.test/admin/users/edit/" + $(this).data('id');
        console.log(url);
        $.ajax({
            type: "get",
            url: url,
            success: function(response) {
                console.log(response.editUser);
                $("#modal_edit #id_user").val(response.editUser.id);
                $("#modal_edit #first_name").val(response.editUser.first_name);
                $("#modal_edit #middle_name").val(response.editUser.middle_name);
                $("#modal_edit #last_name").val(response.editUser.last_name);
                $("#modal_edit #email").val(response.editUser.email);
                $("#modal_edit #username").val(response.editUser.username);
                $("#modal_edit #gender").val(response.editUser.gender);
                $("#modal_edit #address").val(response.editUser.address);
                $("#modal_edit #gender").val(response.editUser.gender);
                $("#modal_edit #avatar_old").val(response.editUser.avatar);
                var img_url = "/image/product/" + response.editUser.avatar;
                $("#modal_edit #image_old").attr("src", img_url);
            },
            error: function(data) {

            }
        });
        // upload
        $("#btn-form-upload").on('click', function(event) {
            event.preventDefault();
            dataformupload = new FormData();
            var url = "{{ route('admin.users.update') }}" ;
      console.log(url);
            if ($("#avatar")[0].files[0] == null) {
                console.log("null");
                dataformupload.append('avatar_old', $("#modal_edit input[name='avatar_old']").val());
            } else {
                console.log(" not null");
                dataformupload.append('avatar', $("#modal_edit input[name='avatar']")[0].files[0]);
            }

            dataformupload.append('id', $("#modal_edit input[name='id_user']").val());
            dataformupload.append('first_name', $("#modal_edit input[name='first_name']").val());
            dataformupload.append('middle_name', $("#modal_edit input[name='middle_name']").val());
            dataformupload.append('last_name', $("#modal_edit input[name='last_name']").val());
            dataformupload.append('username', $("#modal_edit input[name='username']").val());
            dataformupload.append('email', $("#modal_edit input[name='email']").val());
            dataformupload.append('address', $("#modal_edit input[name='address']").val());
            dataformupload.append('gender', $("#modal_edit select[name='gender']").val());
            dataformupload.append('_token', $("#modal_edit input[name='_token']").val());

            $.ajax({
                type: "post",
                url: url,
                data: dataformupload,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                timeout: 100000,
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
                            var ErrorID = '#modal_edit #' + key + 'Error';
                            $(span).text("");
                            $(ErrorID).text(value);
                            //    console.log(key,value);
                        })
                    }
                }
            });

        });
    });

     
    // delete
    $(".user-delete").on('click', function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            console.log(id);
            swal({
                title: "Bạn chắc chắn muốn xóa",
                buttons: [true, "Delete"],
            }).then((willDelete) => {
                if (willDelete) {

                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        url: "{{ route('admin.users.delete') }}",
                        data: {id:id},
                        success: function(data) {
                            if (data.status == 100) {
                            alert(data.message);
                            window.location.reload();
                        }
                        }
                    });
                } else {
                    
                }
            });;


        });

</script>
