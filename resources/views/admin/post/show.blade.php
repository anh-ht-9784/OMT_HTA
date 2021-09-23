@extends('layout_be.master')
@section('header')
    @include('layout_be.header')
@endsection
@section('body-title')
    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">Bài Viết</h1>
@endsection

@section('content')

<h3 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">{{ $data->title }}</h3>
<div class="container">
    <p>{{$data->content}}</p>
</div>

<div class="container">
    {{-- {{ var_dump($comments) }} --}}
    @isset($comments)

    @foreach ($comments as $comment)
    <div class="card card-white post">
        <div class="post-heading">
            <div class="float-left image">
                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
            </div>
            <div class="float-left meta">
                <div class="title h5">
                    <a href="#"><b>{{var_dump( $comment->user_id) }}</b></a>
                   Đã comment
                </div>
                <h6 class="text-muted time">{{ $comment->created_at}}</h6>
            </div>
        </div>
        <div class="post-description">
            <p>{{ $comment->content }}</p>

        </div>
    </div>
    @endforeach
    @endisset
</div>
@endsection
