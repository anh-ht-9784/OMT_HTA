@extends('layout_fe.master')
@section('title')
Trang Chủ
@endsection
@section('content')
<style>
    .card {
        border: none !important;
        padding: 50px 10px 0px;
        background-color: #F0F0F0;
        text-align: center;
        margin: 0 auto;
    }

    .qc-right {
        padding-top: 50px ;
        
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

<div class="row">
    <div class="col-8">
        <div class="row">
        <div class="card col-md-6">
            <img src="image/card1.jpg" class="card-img-top" alt="...">
            <div class="card-body">

                <p class="card-text">Gạ kèo solo mid, hỏi địa chỉ nhà và những hành động thường thấy của các game thủ Việt thời còn "trẻ trâu"</p>

            </div>
        </div>
        <div class="card col-md-6">
            <img src="image/card1.jpg" class="card-img-top" alt="...">
            <div class="card-body">

                <p class="card-text">Gạ kèo solo mid, hỏi địa chỉ nhà và những hành động thường thấy của các game thủ Việt thời còn "trẻ trâu"</p>

            </div>
        </div>
        <div class="card col-md-6">
            <img src="image/card1.jpg" class="card-img-top" alt="...">
            <div class="card-body">

                <p class="card-text">Gạ kèo solo mid, hỏi địa chỉ nhà và những hành động thường thấy của các game thủ Việt thời còn "trẻ trâu"</p>

            </div>
        </div>
        <div class="card col-md-6">
            <img src="image/card1.jpg" class="card-img-top" alt="...">
            <div class="card-body">

                <p class="card-text">Gạ kèo solo mid, hỏi địa chỉ nhà và những hành động thường thấy của các game thủ Việt thời còn "trẻ trâu".</p>

            </div>
        </div>
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
    <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="image/news1.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">5 lần Hollywood "lừa" người xem quá cao tay bằng kỹ xảo: Người thật cũng có thể bị thay thế, nhìn sự thật phía sau mà ngã ngửa!</h5>
              <p class="card-text">Những bộ phim này sử dụng kỹ xảo vô cùng tinh tế, khiến khán giả khó có thể nhận ra nếu không xem hậu trường.</p>
              <p class="card-text"><small class="text-muted">SIXTEENTEN - Manga/Film 16/09/2021 09:00</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="image/news1.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">5 lần Hollywood "lừa" người xem quá cao tay bằng kỹ xảo: Người thật cũng có thể bị thay thế, nhìn sự thật phía sau mà ngã ngửa!</h5>
              <p class="card-text">Những bộ phim này sử dụng kỹ xảo vô cùng tinh tế, khiến khán giả khó có thể nhận ra nếu không xem hậu trường.</p>
              <p class="card-text"><small class="text-muted">SIXTEENTEN - Manga/Film 16/09/2021 09:00</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="image/news1.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">5 lần Hollywood "lừa" người xem quá cao tay bằng kỹ xảo: Người thật cũng có thể bị thay thế, nhìn sự thật phía sau mà ngã ngửa!</h5>
              <p class="card-text">Những bộ phim này sử dụng kỹ xảo vô cùng tinh tế, khiến khán giả khó có thể nhận ra nếu không xem hậu trường.</p>
              <p class="card-text"><small class="text-muted">SIXTEENTEN - Manga/Film 16/09/2021 09:00</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="image/news1.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">5 lần Hollywood "lừa" người xem quá cao tay bằng kỹ xảo: Người thật cũng có thể bị thay thế, nhìn sự thật phía sau mà ngã ngửa!</h5>
              <p class="card-text">Những bộ phim này sử dụng kỹ xảo vô cùng tinh tế, khiến khán giả khó có thể nhận ra nếu không xem hậu trường.</p>
              <p class="card-text"><small class="text-muted">SIXTEENTEN - Manga/Film 16/09/2021 09:00</small></p>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection