<div class="modal-content">
    <div class="modal-header">
        <h5 class="title-post-form modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            
        </button>
    </div>
    <div class="modal-body">
        <form method="POST" id="form_create"  action="" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input class="mt-3 form-control" type="hidden" name="id_post" id="id_post" placeholder=""/>
            <div class="mt-3 col-md-6 col-sm-12">
                <label>@lang('post.title')</label>
                <input class="mt-3 form-control" type="text" name="title" id="title" placeholder=""/>
                <span class="text-danger" id="titleError"></span>
            </div>
            <div class="mt-3 col-12">
                <label>@lang('post.image')</label>
                <input class="mt-3 form-control" type="file" name="image" id="image" /><br>
                <span class="text-danger" id="imageError"></span>
                <div id="formImage">
                    <input class="mt-3 form-control" type="hidden" type="text" name="avatar_old" id="avatar_old"  />
                    <img src="" alt="" srcset="" id="image_old" width="50%" height="50%" class="text-center" />
                </div>
            </div>
            <div class="mb-3 ">
                <label for="exampleFormControlTextarea1" class="form-label">@lang('post.content')</label>
                <textarea  id="content"  name="content" rows="20" cols="80">
                </textarea>
                <span class="text-danger" id="contentError"></span>
            </div>
            <div class="mb-3 col-md-6 col-sm-12" >

                <label>@lang('post.release_date')</label>
                <input class="release_date mt-3 form-control" type="date"   name="release_date" id="release_date"  />
                <span class="text-danger" id="release_dateError"></span>

            </div>
        </div>
            <div class="mt-3">
                <button id="btn-modal" class="btn-form-create mt-3 btn btn-primary">@lang('post.save')</button>
                <button type="reset" class="btn btn-default" data-dismiss="modal">@lang('post.cancel')</button>
            </div>
        </form>
    </div>
</div>
s
