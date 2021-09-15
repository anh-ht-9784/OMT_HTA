@extends('welcome')

@section('content')
<style>
    .content {
        padding-top: 1rem;
    }

    .list-products {
        padding: 0 10rem 0 10rem;
       
        margin: 0 auto;
    }
    .product{
        margin: 0 auto;
        text-align: center;
    }
    .card {
        border: none !important;
        padding:50px 10px 0px;
        background-color: #F0F0F0;
        text-align: center;
        margin: 0 auto;
    }

   
</style>

<div class="content">
    <div class="text-top">
        <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">SẢN PHẨM BÁN CHẠY NHẤT</h1>
        <p class="font-weight-bold text-center">xem tất cả</p>
    </div>

    <div class="list-products row">
        <div class="product col-md-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="image/product/nen_thom_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">BACCARAT</p>
                    <h5 class="card-title">NẾN THƠM CIRE SIZE S</h5>
                    <p class="card-text">10,980,000 Đ</p>
                </div>
            </div>
        </div>
        <div class="product col-md-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="image/product/nen_thom_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">BACCARAT</p>
                    <h5 class="card-title">NẾN THƠM CIRE SIZE S</h5>
                    <p class="card-text">10,980,000 Đ</p>
                </div>
            </div>
        </div>
        <div class="product col-md-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="image/product/nen_thom_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">BACCARAT</p>
                    <h5 class="card-title">NẾN THƠM CIRE SIZE S</h5>
                    <p class="card-text">10,980,000 Đ</p>
                </div>
            </div>
        </div>
        <div class="product col-md-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="image/product/nen_thom_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">BACCARAT</p>
                    <h5 class="card-title">NẾN THƠM CIRE SIZE S</h5>
                    <p class="card-text">10,980,000 Đ</p>
                </div>
            </div>
        </div>
        <div class="product col-md-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="image/product/nen_thom_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">BACCARAT</p>
                    <h5 class="card-title">NẾN THƠM CIRE SIZE S</h5>
                    <p class="card-text">10,980,000 Đ</p>
                </div>
            </div>
        </div>
        <div class="product col-md-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="image/product/nen_thom_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">BACCARAT</p>
                    <h5 class="card-title">NẾN THƠM CIRE SIZE S</h5>
                    <p class="card-text">10,980,000 Đ</p>
                </div>
            </div>
        </div>
        <div class="product col-md-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="image/product/nen_thom_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">BACCARAT</p>
                    <h5 class="card-title">NẾN THƠM CIRE SIZE S</h5>
                    <p class="card-text">10,980,000 Đ</p>
                </div>
            </div>
        </div>
        <div class="product col-md-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="image/product/nen_thom_01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">BACCARAT</p>
                    <h5 class="card-title">NẾN THƠM CIRE SIZE S</h5>
                    <p class="card-text">10,980,000 Đ</p>
                </div>
            </div>
        </div>
        

    </div>
</div>

@endsection