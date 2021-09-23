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
            @foreach ($posts as $c)
                <tr>
                    <th scope="row">{{ $c->id }}</th>
                    <td>{{ $c->title }}</td>
                    <td>
                        <image src="/image/product/{{ $c->image }}" with="800px" height="100px" width="100px    ">
                    </td>
                    <td>{{ $c->author_name}}</td>
                    <td>
                        {{ $c->access == 0 ? 'Chưa phát hành' : 'Đã phát hành' }}
                    </td>
                    <td>{{ $c->author_name }}</td>

                    <td>
                        <button class="post-modal-edit btn btn-primary" role="button" data-id="{{ $c->id }}"
                            data-toggle="modal" data-target="#postEdit">@lang('user.edit')</button>
                        <div>
                            <button class="post_delete button btn btn-danger"  data-id="{{$c->id}}" >@lang('user.delete')</button>
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
        <div class="modal-dialog -xl" role="document">
            @include('admin.post.postForm')
        </div>
    </div>
    {{--  --}}

    
   

@endsection
@push('script')
@include('admin.post.postJs')
@endpush