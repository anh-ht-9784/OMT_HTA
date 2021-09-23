<div class="modal-content">
    <div class="modal-header">
        <h5 class="title-post-form modal-title" id="exampleModalLabel">Thêm mới Bài viết</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form method="POST" id="form_create"  action="" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="mt-3 col-md-6 col-sm-12">
                <label>Tiêu đề</label>
                <input class="mt-3 form-control" type="text" name="title" id="title" placeholder=""/>
                <span class="text-danger" id="titleError"></span>
            </div>
            <div class="mt-3 col-md-6 col-sm-12">
                <label>Ảnh bìa</label>
                <input class="mt-3 form-control" type="file" name="image" id="image" /><br>
                <span class="text-danger" id="imageError"></span>
                <div id="formImage">
                    <input class="mt-3 form-control" type="hidden" type="text" name="avatar_old" id="avatar_old"  />
                    <img src="" alt="" srcset="" id="image_old" width="100%" height="100%" />
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nội Dung bài Viết</label>
                <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                <span class="text-danger" id="contentError"></span>
            </div>
            <div class="mb-3 col-md-6 col-sm-12" >

                <label>Ngày Phát Hành</label>
                <input class="mt-3 form-control" type="date" name="release_date" id="release_date"  />
                <span class="text-danger" id="release_dateError"></span>

            </div>
            <div class="mt-3 user_create col-md-6 col-sm-12">
                <label>Người Đăng Bài</label>
                <select class="form-select" id="userid_create" name="userid_create" aria-label="Default select example">                           
                    @foreach ($users as $s)
                        <option value="{{ $s->id }}">{{ $s->username }}</option>
                    @endforeach
                </select>
            </div>
        </div>
            <div class="mt-3">
                <button id="btn-modal" class="btn-form-create mt-3 btn btn-primary">Create</button>
                <button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
</div>
