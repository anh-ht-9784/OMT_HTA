
 
    <div class="test-modal modal fade" name="testmodal" id="form-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="title-user-form modal-title" id="exampleModalLabel">Thêm mới người dùng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form_create" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-3">
                                <label>first_name</label>
                                <input class="mt-3 form-control" type="text" id="first_name"  name="first_name"  />
                            </div>
                            <div class="mt-3">
                                <label>middle_name</label>
                                <input class="mt-3 form-control" type="text" name="middle_name" id="middle_name"  />
                            </div>
                            <div class="mt-3">
                                <label>last_name</label>
                                <input class="mt-3 form-control" type="text" name="last_name" id="last_name" />
                            </div>
                            <div class="mt-3">
                                <label>username</label>
                                <input class="mt-3 form-control" type="text" name="username" id="username" />
                            </div>
                            <div class="mt-3">
                                <label>Email</label>
                                <input class="mt-3 form-control" type="email" name="email" id="email" />
                            </div>
                            <div class="mt-3">
                                <label>avatar</label>
                                <input class="mt-3 form-control" type="file" name="avatar" id="avatar" /><br>
                                <input class="mt-3 form-control" type="text" name="avatar_old" id="avatar_old"/>
                                <img src="" alt="" srcset="" id="image_old" width="100%" height="100%" />
                            </div>
                            <div class="mt-3">
                                <label>Address</label>
                                <input class="mt-3 form-control" type="text" name="address" id="address" />
                            </div>
                            <div class="mt-3">
                                <label>Password</label>
                                <input class="mt-3 form-control" type="text" name="password" id="password" />
                            </div>

                            <div class="mt-3">
                                <label>Gender</label>
                                <select class="mt-3 form-control" name="gender">
                                    <option value="1">
                                        Male
                                    </option>
                                    <option value="2">
                                        Female
                                    </option>
                                </select>
                            </div>

                            <div class="mt-3">
                                <button id="btn-modal"  class="btn-form-create mt-3 btn btn-primary">Create</button>
                                <button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div> 