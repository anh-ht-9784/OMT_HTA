@extends('layout_be.master')
@section('header')
    @include('layout_be.header')
@endsection
@section('body-title')
    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">@lang('Danh Mục Bình Luận')</h1>
   
@endsection

@section('content')

    <table class="table " id="myTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nội Dung</th>
                <th scope="col">Người Tạo</th>
                <th scope="col">Bài Viết</th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
            @foreach ($listComnent as $listComnent)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $listComnent->content }}</td>
                    <td>{{$listComnent->authors==null? "Tài Khoản " :$listComnent->authors->username}}</td>
                    <td>{{ $listComnent->post->title}}</td>
                    <td>
                        <div>
                            <button class="comment-delete button btn btn-danger"  data-id="{{$listComnent->id}}" >@lang('user.delete')</button>
                        </div>
                    </td>
                </tr>

              @endforeach
        </tbody>
    </table>
    @endsection
    @push('script')
    @include('admin.comment.commentJs')
    @endpush