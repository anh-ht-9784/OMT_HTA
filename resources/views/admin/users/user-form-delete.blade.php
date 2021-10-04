{{-- 
  <button class="btn btn-danger" data-toggle="modal"
  data-target="#confim_delete{{ $c->id }}">@lang('user.delete')</button>
<div class="modal fade" id="confim_delete{{ $c->id }}" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Xác Nhận Xóa Bản Ghi
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-dismiss="modal">Close</button>
            <form action="{{ route('admin.users.delete', ['id' => $c->id]) }}"
                method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Xóa</button>
            </form>

        </div>
    </div>
</div>
</div> --}}
{{-- @can('edit_user ')
<button class="modal_user_edit btn btn-primary" 
    role="button" data-id="{{ $userlist->id }}" data-toggle="modal"
    data-target="#modal_edit">@lang('user.edit')</button>
    @endcan
    <div>
        @can('delete_user')
        <button class="user-delete button btn btn-danger"  data-id="{{$userlist->id}}" >@lang('user.delete')</button>
        @endcan
    </div> --}}