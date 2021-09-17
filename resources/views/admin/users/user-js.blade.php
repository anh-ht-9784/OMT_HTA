<script>
    function myFunction() {
        var modal = document.getElementsByClassName("test-modal");
        modal[0].id = "modal_create"
        var title_modal = document.getElementsByClassName("title-user-form");
        title_modal[0].innerHTML = "Thêm Thông Tin Người Dùng";
        $(".btn-form-create")[0].id = "btn-form-create";
        // clear form
        document.getElementById('image_old').src="";
        var input = $("#form_create input");
        for (let i = 0; i < input.length; i++) {
            input[i].value="";   
        }
         // bắt sk sumbit
        $("#btn-form-create").on('click', function(event) {

            event.preventDefault();
            const url = "{{ route('admin.users.store') }}";
            // console.log($(this));

            dataform = new FormData();
            dataform.append('avatar', $("#form_create input[name='avatar']")[0].files[0]);
            dataform.append('first_name', $("#form_create input[name='first_name']").val());
            dataform.append('middle_name', $("#form_create input[name='middle_name']").val());
            dataform.append('last_name', $("#form_create input[name='last_name']").val());
            dataform.append('username', $("#form_create input[name='username']").val());
            dataform.append('email', $("#form_create input[name='email']").val());
            dataform.append('address', $("#form_create input[name='address']").val());
            dataform.append('password', $("#form_create input[name='password']").val());
            dataform.append('_token', $("#form_create input[name='_token']").val());
            // console.log(dataform);

            $.ajax({
                type: "POST",
                url: url,
                data: dataform,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                timeout: 100000,
                success: function(data) {
                    window.location.reload();
                },
                error: function(data) {

                }
            });
        });

    }

    function myFunction2(id) {

        var modal = document.getElementsByClassName("test-modal");
        modal[0].id = "modal_edit"
        var title_modal = document.getElementsByClassName("title-user-form");
        title_modal[0].innerHTML = "Cập Nhật Thông Tin Người Dùng";
        $(".btn-form-create")[0].id = "btn-form-upload"

        var url = "http://omt.test:8080/admin/users/edit/" + id;
        // hiển thị chỉnh sửa.
        $.ajax({
            type: "get",
            url: url,
            success: function(response) {
                $("#first_name").val(response.data.first_name);
                $("#middle_name").val(response.data.middle_name);
                $("#last_name").val(response.data.last_name);
                $("#email").val(response.data.email);
                $("#username").val(response.data.username);
                $("#gender").val(response.data.gender);
                $("#address").val(response.data.address);
                $("#password").val(response.data.password);
                $("#avatar_old").val(response.data.avatar);
                var img_url = "/image/product/" + response.data.avatar;
                $("#image_old").attr("src", img_url);

            },
            error: function(data) {

            }
        });

        // upload
        $("#btn-form-upload").on('click', function(event) {
            event.preventDefault();
            dataformupload = new FormData();
            var url = "http://omt.test:8080/admin/users/update/"+id;
            
            if($("#avatar")[0].files[0] == null){  
              console.log("null");
              dataformupload.append('avatar_old',$("#form_create input[name='avatar_old']").val());
             }else{
                console.log(" not null");
                dataformupload.append('avatar', $("#form_create input[name='avatar']")[0].files[0]);
             }
           
         
            dataformupload.append('first_name', $("#form_create input[name='first_name']").val());
            dataformupload.append('middle_name', $("#form_create input[name='middle_name']").val());
            dataformupload.append('last_name', $("#form_create input[name='last_name']").val());
            dataformupload.append('username', $("#form_create input[name='username']").val());
            dataformupload.append('email', $("#form_create input[name='email']").val());
            dataformupload.append('address', $("#form_create input[name='address']").val());
            dataformupload.append('_token', $("#form_create input[name='_token']").val());
           

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
                    window.location.reload();
                },
                error: function(data) {
                    console.log(data);
                }
            });

            //
        });
    }
</script>
