@extends('layout_fe.master')

@section('title')
    Bài Viết
@endsection

@section('header')
    @include('layout_fe.header')
@endsection

@section('content')

    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">{{ $news->title }}</h1>
    <div class="container">
        <p>{{ print $news->content }}</p>
    </div>
    <div class="container">
        @if (Auth::check())
            <form class="row g-3">
                @csrf
                <div class="col-auto">
                    <input type="hidden" name="post_id" value="{{ $news->id }}">
                    <input type="text" id="comment_input" class="form-control" placeholder="">
                </div>
                <div class="col-auto">
                    <button type="submit" id="comment_create"
                        class="btn btn-secondary mb-3">@lang('frontend.comment')</button>
                </div>
            </form>
        @endif
        @isset($comments)
            
                <div class="card card-white post ">
                    <div class="">
                        @foreach ($comments as $comment)
                    <div class=" row post-heading" id="comment{{ $comment->id }}">
                        <div class=" image col-2">
                            <img src="/image/product/{{ $comment->authors->avatar }}" width="100" height="110" alt="nice"
                                class=" mr-3">
                        </div>
                        <div class="col-8 meta">
                            <div class="title h5">
                                <b>{{ $comment->authors == null ? 'Tài Khoản ' : $comment->authors->username }}</b>
                            </div>
                            <p>{{ $comment->content }}</p>
                            {{-- <h6 class="text-muted time">{{ $comment->created_at }}</h6> --}}
                            @if (Auth::id() == $comment->authors->id)
                                <button style="padding-right = 0;" class="comment-delete button btn btn-danger"
                                    data-id="{{ $comment->id }}">@lang('user.delete')</button>
                            @endif
                        </div>
                        
                    </div>
                    @endforeach
                    <div id="comment"></div>
                </div>
        </div>
       
       

    @endisset
    </div>
@endsection
@push('script')
   

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
                        content =
                            '<div  class="row" id="comment'+data.newComment.id+'">'+
                            '<div class="image col-2"><img src="/image/product/{{ Auth::user()->avatar }}"width="100" height="110" alt="nice"class=" mr-3"></div><div class="col-8 meta">' +
                            '<div class="title h5">' +
                            '<b>{{ Auth::user()->username }}</b>' +
                            '</div>' +
                            '<p>' + data.newComment.content + '</p>' +
                            '<button style="padding-right = 0;" class="comment-delete button btn btn-danger"data-id="'+ data.newComment.id+'">@lang("user.delete")</button>' +
                            '</div>'+
                            '</div>';
                      console.log(data.newComment.id);
                        $('#comment').append(content);
                    }
                }
            });
        });



        $("body").on("click", ".comment-delete", function(event) {
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
                        url: "{{ route('admin.comment.delete') }}",
                        data: {id:$(this).data('id')},
                        success: function(data) {
                          deleteid = "#comment" +data.id;
                          console.log(deleteid);
                           $( deleteid).remove();       
                        }
                    });
                } else {
                    
                }
            });;


        });
    </script>
   
@endpush
