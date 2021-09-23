<script type="text/javascript">

    $(document).ready(function() {
    //    
        $("#post-create").on('click', function(event) {
            var title_modal = document.getElementsByClassName("title-post-form");
            title_modal[0].innerHTML = "Thêm mới bài viết.";
            $("form .btn-form-create")[0].id = "post-form-create";
            hiden = $("form #formImage").hide();
            $(".user_create").show();

            $("#post-form-create").on('click', function(event) {
                event.preventDefault();
                $("#postCreat span").text("");
                console.log($("#form_create input[name='title']").val())
                PostCreate = new FormData();
                PostCreate.append('image', $("#form_create input[name='image']")[0].files[0]);
                PostCreate.append('title', $("#form_create input[name='title']").val());
                PostCreate.append('content', $("#form_create textarea[name='content']").val());
                PostCreate.append('release_date', $("#form_create input[name='release_date']").val());
                PostCreate.append('userid_create', $("#form_create select[name='userid_create']")
            .val());
                PostCreate.append('_token', $("#form_create input[name='_token']").val());
                console.log(PostCreate);
                $.ajax({
                    type: "post",
                    url: "http://omt.test:8080/admin/post/store",
                    data: PostCreate,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function(data) {
                        if (data.status == 200) {
                            alert(data.message);
                            window.location.reload();
                        } else {
                            alert(data.message);
                        }


                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        if($.isEmptyObject(errors) == false) {
                            $.each(errors.errors,function (key, value) {
                                var ErrorID = '#postCreat #' + key +'Error';
                                $(ErrorID).text(value);
                               console.log(ErrorID);
                            })
                        }
                    }
                });
            })

        })
 
        // end create


        //  delete
        $(".post_delete").on('click', function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            swal({
                title: "Are you sure!",
                buttons: [true, "Delete"],
            }).then((willDelete) => {
                if (willDelete) {

                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        url: "{{ route('admin.post.delete') }}",
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


        // end delete

        // update
   

        $(".post-modal-edit").on('click', function(event) {

            var title_modal = document.getElementsByClassName("title-post-form");
            title_modal[1].innerHTML = "Cập Nhật Bài Viết";
            $("form .btn-form-create")[1].id = "post-form-upload";
            var id = $(this).data('id');
            hiden = $("form #formImage").show();
            $(".user_create").hide();
            var url = "http://omt.test:8080/admin/post/edit/" + id;
          
            console.log(url);

            $.ajax({
                type: "get",
                url: url,
                success: function(response) {
                   console.log(response.data);
                    $("#postEdit #title").val(response.data.title);
                    var img_url = "/image/product/" + response.data.image;
                    $("#postEdit #image_old").attr("src", img_url);
                    $("#postEdit #content").val(response.data.content);
                    $("#postEdit #avatar_old").val(response.data.image);
                    $("#postEdit #release_date").val(response.data.release_date);
                },
                error: function(data) {

                }
            });



            // upload
            $("#post-form-upload").on('click', function(event) {
                event.preventDefault();
                postUpload = new FormData();
                var url = "http://omt.test:8080/admin/post/update/" + id;
                if ($("#postEdit #image")[0].files[0] != null) {
                    postUpload.append('image', $("#postEdit input[name='image']")[0].files[0]);
                }
                postUpload.append('title', $("#postEdit input[name='title']").val());
                postUpload.append('content', $("#postEdit textarea[name='content']").val());
                postUpload.append('release_date', $("#postEdit input[name='release_date']").val());
                postUpload.append('userid_create', $("#postEdit select[name='userid_create']").val());
                postUpload.append('_token', $("#postEdit input[name='_token']").val());
                $.ajax({
                    type: "post",
                    url: url,
                    data: postUpload,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    timeout: 100000,
                    success: function(data) {
                        alert(data.message);
                        if (data.status == 200) {
                            window.location.reload();
                        }
                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        if($.isEmptyObject(errors) == false) {
                            $.each(errors.errors,function (key, value) {
                                var ErrorID = '#postEdit #' + key +'Error';
                                $(ErrorID).text(value);
                               console.log(ErrorID);
                            })
                        }
                    }
                });

            });



        });

    });
</script>
