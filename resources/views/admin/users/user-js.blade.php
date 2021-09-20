<script>
    function myFunction() {

        var title_modal = document.getElementsByClassName("title-user-form");
        title_modal[0].innerHTML = "Thêm Thông Tin Người Dùng";
        // đổi id button
        $("#modal_create .btn-form-create")[0].id = "btn-form-create";
        $("#modal_create #form-image").hide();

        
        $("#btn-form-create").on('click', function(event) {
            event.preventDefault();

            console.log($("#modal_create input[name='avatar']")[0].files[0]);
            dataform = new FormData();
            dataform.append('avatar', $("#modal_create input[name='avatar']")[0].files[0]);
            dataform.append('first_name', $("#modal_create input[name='first_name']").val());
            dataform.append('middle_name', $("#modal_create input[name='middle_name']").val());
            dataform.append('last_name', $("#modal_create input[name='last_name']").val());
            dataform.append('username', $("#modal_create input[name='username']").val());
            dataform.append('email', $("#modal_create input[name='email']").val());
            dataform.append('address', $("#modal_create input[name='address']").val());
            dataform.append('password', $("#modal_create input[name='password']").val());
            dataform.append('gender', $("#modal_create input[name='gender']").val());
            dataform.append('_token', $("#modal_create input[name='_token']").val());
            $.ajax({
                type: "post",
                url: "http://omt.test:8080/admin/users/store",
                data: dataform,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(data) {
                    window.location.reload();
                    
                },
                error: function(data) {
                    var errors = data.responseJSON;
                    if($.isEmptyObject(errors) == false) {
                        $.each(errors.errors,function (key, value) {
                            var ErrorID = '#modal_create #' + key +'Error';
                            $(ErrorID).text(value);
                           console.log(ErrorID);
                        })
                    }
                }
            });
        });
    }
    function myFunction2(id) {
        var title_modal = document.getElementsByClassName("title-user-form");
        title_modal[1].innerHTML = "Cập Nhật Thông Tin Người Dùng";
        // đổi id button
        $(".btn-form-create")[1].id = "btn-form-upload"
        $("#modal_edit #hiden_password").hide();


        var url = "http://omt.test:8080/admin/users/edit/" + id;
        $.ajax({
            type: "get",
            url: url,
            success: function(response) {
                $("#modal_edit #first_name").val(response.data.first_name);
                $("#modal_edit #middle_name").val(response.data.middle_name);
                $("#modal_edit #last_name").val(response.data.last_name);
                $("#modal_edit #email").val(response.data.email);
                $("#modal_edit #username").val(response.data.username);
                $("#modal_edit #gender").val(response.data.gender);
                $("#modal_edit #address").val(response.data.address);
                $("#modal_edit #gender").val(response.data.gender);
                $("#modal_edit #avatar_old").val(response.data.avatar);
                var img_url = "/image/product/" + response.data.avatar;
                $("#modal_edit #image_old").attr("src", img_url);
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
              dataformupload.append('avatar_old',$("#modal_edit input[name='avatar_old']").val());
             }else{
                console.log(" not null");
                dataformupload.append('avatar', $("#modal_edit input[name='avatar']")[0].files[0]);
             }
           
         
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
                    window.location.reload();
                },
                error: function(data) {
                    var errors = data.responseJSON;
                    if($.isEmptyObject(errors) == false) {
                        $.each(errors.errors,function (key, value) {
                            var ErrorID = '#modal_edit #' + key +'Error';
                            $(ErrorID).text(value);
                        //    console.log(key,value);
                        })
                    }
                }
            });
            
        });
    }
</script>