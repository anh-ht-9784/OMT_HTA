@extends('layout_fe.master')
@section('title')
  Sửa Thông tin tài Khoản
@endsection

@section('header')
    @include('layout_fe.header')
@endsection
@section('content')
<div style="margin:auto ; width: 70%;">
<form method="POST"   action="{{ route('auth.uploadAccount') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_user" id="id_user" value="{{ $dataAcount->id}}">
    <div class="mt-3">
        <label>Họ</label>
        <input class="mt-3 form-control" type="text" id="first_name" name="first_name" value="{{ $dataAcount->first_name }}"/>
        @error('first_name')
        <span class="text-danger">{{ $message }}</span>
       @enderror
    </div>
    <div class="mt-3">
        <label>Tên đệm</label>
        <input class="mt-3 form-control" type="text" name="middle_name" id="middle_name" value="{{ $dataAcount->middle_name }}" />
        @error('middle_name')
        <span class="text-danger">{{ $message }}</span>
       @enderror
    </div>
    
    <div class="mt-3">
        <label>Tên</label>
        <input class="mt-3 form-control" type="text" name="last_name" id="last_name" value="{{ $dataAcount->last_name }}" />
        @error('last_name')
        <span class="text-danger">{{ $message }}</span>
       @enderror
    </div>
    <div class="row">
    <div class="col-6 mt-3">
        <label>Ảnh đại diện</label>
        <input class="mt-3 form-control" type="file" name="avatar" id="avatar" /><br>
        @error('first_name')
        <span class="text-danger">{{ $message }}</span>
       @enderror
        <image src="/image/product/{{ $dataAcount->avatar }}" with="1800px" height="500px">
    </div>
    <div class="col-6 mt-3">
        <label>Giới Tính</label>
        <select class="mt-3 form-control" name="gender" id="gender" >
            <option value="1" {{ $dataAcount->gender==1? "selected":"" }}>
                Nam
            </option>
            <option value="2"  {{ $dataAcount->gender==2? "selected":"" }}>
                Nữ
            </option>
        </select>
    </div>
</div>
    <div class="mt-3">
        <label>Email</label>
        <input class="mt-3 form-control" type="email" name="email" id="email" value="{{ $dataAcount->email }}" value="{{ $dataAcount->email}}" />
        @error('email')
        <span class="text-danger">{{ $message }}</span>
       @enderror
    </div>

    <div class="mt-3">
        <label>Địa CHỉ</label>
        <input class="mt-3 form-control" type="text" name="address" id="address"  value="{{ $dataAcount->address }}" />
        @error('address')
        <span class="text-danger">{{ $message }}</span>
       @enderror
    </div>

  

    <div class="mt-3">
        <button type="submit"  class="mt-3 btn btn-primary">Save</button>
        <button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
    </div>
</form>
</div>
@endsection