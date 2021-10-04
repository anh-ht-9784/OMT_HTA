
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title-user-form modal-title" id="exampleModalLabel">@lang('user.create_user')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="form_create" action="" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_user" id="id_user" >
                    <div class="mt-3">
                        <label>@lang('user.account')</label>
                        <input class="mt-3 form-control" type="text" name="username" id="username" />
                        <span class="text-danger" id="usernameError"></span>
                    </div>
                    <div class="mt-3" id="hiden_password">
                        <label>@lang('user.password')</label>
                        <input class="mt-3 form-control" type="text" name="password" id="password" />
                        <span class="text-danger" id="passwordError"></span>
                    </div>

                    <div class="mt-3">
                        <label>@lang('user.first_name')</label>
                        <input class="mt-3 form-control" type="text" id="first_name" name="first_name" />
                        <span class="text-danger" id="first_nameError"></span>
                    </div>
                    <div class="mt-3">
                        <label>@lang('user.middle_name')</label>
                        <input class="mt-3 form-control" type="text" name="middle_name" id="middle_name" />
                        <span class="text-danger" id="middle_nameError"></span>
                    </div>
                    <div class="mt-3">
                        <label>@lang('user.last_name')</label>
                        <input class="mt-3 form-control" type="text" name="last_name" id="last_name" />
                        <span class="text-danger" id="last_nameError"></span>
                    </div>
                    <div class="mt-3">
                        <label>@lang('user.avatar')</label>
                        <input class="mt-3 form-control" type="file" name="avatar" id="avatar" /><br>
                        <span class="text-danger" id="avatarError"></span>
                        <div id="form-image">
                        <input class="mt-3 form-control" type="hidden" type="text" name="avatar_old" id="avatar_old" />
                        <img src="" alt="" srcset="" id="image_old" width="100%" height="100%" />
                        
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>@lang('user.email')</label>
                        <input class="mt-3 form-control" type="email" name="email" id="email" />
                        <span class="text-danger" id="emailError"></span>
                    </div>

                    <div class="mt-3">
                        <label>@lang('user.address')</label>
                        <input class="mt-3 form-control" type="text" name="address" id="address" />
                        <span class="text-danger" id="addressError"></span>
                    </div>

                    <div class="mt-3">
                        <label>@lang('user.gender.title')</label>
                        <select class="mt-3 form-control" name="gender" id="gender">
                            <option  value="1">
                                @lang('user.gender.male')
                            </option>
                            <option value="2">
                                @lang('user.gender.female')
                            </option>
                        </select>
                    </div>
                    <div class="mt-3">
                    <label>Quyền tài Khoản</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" name="role[]">
                            <label class="form-check-label" for="">
                              Người Viết Bài
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" name="role[]" >
                            <label class="form-check-label" for="">
                            Khách
                            </label>
                          </div>
                    </div>
               <div class="mt-3">
                        <button id="btn-modal" class="btn-form-create mt-3 btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
  