
<button class="btn btn-primary" data-toggle="modal"
data-target="#confim_delete{{ $c->id }}">Delete</button>
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
</div>
