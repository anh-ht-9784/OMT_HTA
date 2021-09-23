@extends('layout_be.master')
@section('header')
    @include('layout_be.header')
@endsection
@section('body-title')
    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">@lang('Danh Mục Bình Luận')</h1>
    <button class="btn btn-success" id="comment-create" role="button" data-toggle="modal" data-target="#postCreat">Tao Moi</button>
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
            @foreach ($data as $c)
                <tr>
                    <th scope="row">{{ $c->id }}</th>
                    <td>{{ $c->content }}</td>
                    <td>{{ $c->user_id }}</td>
                    <td>{{ $c->post_id }}</td>
                    <td>
                        <div>
                            <button class="comment-delete_delete button btn btn-danger"  data-id="{{$c->id}}" >@lang('user.delete')</button>
                        </div>
                    </td>
                </tr>

              @endforeach
        </tbody>
    </table>
    @endsection
