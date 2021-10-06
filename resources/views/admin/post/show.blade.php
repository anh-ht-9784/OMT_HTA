@extends('layout_be.master')
@section('header')
    @include('layout_be.header')
@endsection
@section('body-title')
    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;"></h1>
@endsection

@section('content')

    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">{{ $news->title }}</h1>
    <div class="container">
        <p>{{ print
        
        
        
        
        
        ($news->content) }}</p>
    </div>
    <div class="container">
        <form class="row g-3">
            @csrf
            <div class="col-auto">
                <input type="hidden" name="post_id" value="{{ $news->id }}">
                <input type="text" id="comment_input" class="form-control" placeholder="">
            </div>
            <div class="col-auto">
                <button type="submit" id="comment_create" class="btn btn-secondary mb-3">@lang('post.comment')</button>
            </div>
        </form>
        @isset($comments)
            @foreach ($comments as $comment)
                <div class="card card-white post ">
                    <div class="">
                        <div class="row post-heading">
                            <div class=" image col-2">
                                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar"
                                    alt="user profile image">
                            </div>
                            <div class="col-8 meta">
                                <div class="title h5">
                                    <b>{{ $comment->authors == null ? 'Tài Khoản ' : $comment->authors->username }}</b>
                                </div>
                                <p>{{ $comment->content }}</p>
                                {{-- <h6 class="text-muted time">{{ $comment->created_at }}</h6> --}}
                           
                                    <button style="padding-right = 0;" class="comment-delete button btn btn-danger"
                                    data-id="{{ $comment->id }}">@lang('user.delete')</button>
                            
                            </div>
                          
                        </div>
                    </div>
                </div>

            @endforeach
            
        @endisset
    </div>
@endsection
@push('script')
    @include('admin.comment.commentJs')

    <script type="text/javascript">
        $("#comment_create").on('click', function(event) {

            event.preventDefault();
            $data = {
                content: $("#comment_input").val(),
                _token: $("input[name='_token']").val(),
                post_id: $("input[name='post_id']").val()
            }

            $.ajax({
                type: "POST",
                url: "{{ route('admin.comment.store') }}",
                data: $data,
                success: function(data) {
                    if (data.status == 100) {
                        alert(data.message);
                        window.location.reload();
                    }
                }
            });
        });
    </script>
@endpush
