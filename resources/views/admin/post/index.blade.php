@extends('layout_be.master')
@section('header')
    @include('layout_be.header')
@endsection
@section('body-title')

    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">@lang('Danh Mục Người
        Dùng')</h1>
    <button class="btn btn-success" id="post-create" role="button" data-toggle="modal" data-target="#postCreat">Tạo Mới Bài
        viết</button>
@endsection
@section('content')

    <table class="table " id="myTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">@lang('user.title')</th>
                <th scope="col">@lang('user.image')</th>
                <th scope="col">@lang('user.userid_create')</th>
                <th scope="col">@lang('user.access')</th>
                <th scope="col">@lang('user.release_date')</th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $posts)
                <tr>
                    <th scope="row">{{ $posts->id }}</th>
                    <td><a href="{{ route('admin.post.show',['id'=>$posts->id]) }}">{{ $posts->title }}</a></td>
                    <td>
                        <image src="/image/product/{{ $posts->image }}" with="800px" height="100px" width="100px    ">
                    </td>
                    <td>{{ $posts->author_name}}</td>
                    <td>
                        {{ $posts->access == 0 ? 'Chưa phát hành' : 'Đã phát hành' }}
                    </td>
                    <td>{{ $posts->release_date }}</td>

                    <td>
                        <button class="post-modal-edit btn btn-primary" role="button" data-id="{{ $posts->id }}"
                            data-toggle="modal" data-target="#postEdit">@lang('user.edit')</button>
                        <div>
                            <button class="post_delete button btn btn-danger"  data-id="{{$posts->id}}" >@lang('user.delete')</button>
                        </div>
                    </td>
                </tr>

              @endforeach
        </tbody>
    </table>
    <div class="test-modal modal fade" name="postCreat" id="postCreat" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            @include('admin.post.postForm')
        </div>
    </div>
    {{-- creatr --}}
    <div class="test-modal modal fade" name="postEdit" id="postEdit" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            @include('admin.post.postForm')
        </div>
    </div>
    {{--  --}}

    
   

@endsection
@push('script')
@include('admin.post.postJs')
@endpush