@extends('layout_fe.master')

@section('title')
Trang Chủ
@endsection

@section('header')
@include('layout_fe.header')
@endsection

@section('css')
<style>
  .card {
      border: none !important;
      padding: 50px 10px 0px;
      background-color: #F0F0F0;
    
      margin: 0 auto;
  }

  .qc-right {
      padding-top: 50px ;
      
  }
  a{
    text-decoration: none !important ;
    color:black;
  }
  .news-top{
      margin-top:2rem;
      background-color: gray ;
      color: white; 
      height: 50px;
  }
  .news-top>p{    
      line-height:50px;
  }
  
</style>
@endsection


@section('content')


<div class="row">
    <div class="col-8">
        <div class="row">
          @foreach ($HomeList as $HomeList)
        <div class="card col-md-6">
            <img src="/image/product/{{ $HomeList->image }}" class="card-img-top" alt="...">
            <div class="card-body">

                <p class="card-text"><a href="{{ route('frontend.news', ['id' => $HomeList->id,'slug' => $HomeList->slug]) }}"><b>{{ $HomeList->title }}</b></a></p>

            </div>
        </div>
        @endforeach
    </div>
    </div>
    <div class="col-4 qc-right">
        <div class="qc-right-img">
            <img src="image/qc.jpg" width="100%" class="" alt="...">
            <img style="padding-top:3.2rem" src="image/qc.jpg" width="100%" class="" alt="...">
        </div>
    </div>
</div>
<div class="row news">
    <div class="col-12 news-top" >
       <p>@lang('Mới Cập Nhật')</p>
    </div>
    @foreach ($news as $new )
    <div class="card mb-3" >
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/image/product/{{ $new->image }}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><a href="{{ route('frontend.news', ['id' => $new->id,'slug' => $new->slug]) }}">{{ $new->title }}</a></h5>
            <p class="card-text">Những bộ phim này sử dụng kỹ xảo vô cùng tinh tế, khiến khán giả khó có thể nhận ra nếu không xem hậu trường.</p>
            <p class="card-text"><small class="text-muted">SIXTEENTEN - Manga/Film {{ $new->release_date }}</small></p>
          </div>
        </div>
      </div>
    </div>

   
</div> 
    @endforeach
   

@endsection

@section('js')
@endsection