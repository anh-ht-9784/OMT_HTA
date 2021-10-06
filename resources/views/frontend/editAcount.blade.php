@extends('layout_fe.master')
@section('title')
@lang('frontend.title')
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
        <label>@lang('frontend.first_name')</label>
        <input class="mt-3 form-control" type="text" id="first_name" name="first_name" value="{{ $dataAcount->first_name }}"/>
        @error('first_name')
        <span class="text-danger">{{ $message }}</span>
       @enderror
    </div>
    <div class="mt-3">
        <label>@lang('frontend.middle_name')</label>
        <input class="mt-3 form-control" type="text" name="middle_name" id="middle_name" value="{{ $dataAcount->middle_name }}" />
        @error('middle_name')
        <span class="text-danger">{{ $message }}</span>
       @enderror
    </div>
    
    <div class="mt-3">
        <label>@lang('frontend.last_name')</label>
        <input class="mt-3 form-control" type="text" name="last_name" id="last_name" value="{{ $dataAcount->last_name }}" />
        @error('last_name')
        <span class="text-danger">{{ $message }}</span>
       @enderror
    </div>
    <div class="row">
    <div class="col-6 mt-3">
        <label>@lang('frontend.avatar')</label>
        <input class="mt-3 form-control" type="file" name="avatar" id="avatar" /><br>
        @error('avatar')
        <span class="text-danger">{{ $message }}</span>
       @enderror
        <image src="/image/product/{{ $dataAcount->avatar }}" with="1800px" height="500px">
    </div>
    <div class="col-6 mt-3">
        <label>@lang('frontend.gender.title')</label>
        <select class="mt-3 form-control" name="gender" id="gender" >
            <option value="1" {{ $dataAcount->gender==1? "selected":"" }}>
                @lang('frontend.gender.male')
            </option>
            <option value="2"  {{ $dataAcount->gender==2? "selected":"" }}>
                @lang('frontend.gender.female')
            </option>
        </select>
    </div>
</div>
    <div class="mt-3">
        <label>@lang('frontend.email')</label>
        <input class="mt-3 form-control" type="email" name="email" id="email" value="{{ $dataAcount->email }}" value="{{ $dataAcount->email}}" />
        @error('email')
        <span class="text-danger">{{ $message }}</span>
       @enderror
    </div>

    <div class="mt-3">
        <label>@lang('frontend.address')</label>
        <input class="mt-3 form-control" type="text" name="address" id="address"  value="{{ $dataAcount->address }}" />
        @error('address')
        <span class="text-danger">{{ $message }}</span>
       @enderror
    </div>

  

    <div class="mt-3">
        <button type="submit"  class="mt-3 btn btn-primary">@lang('frontend.save')</button>
        <button type="reset" class="btn btn-default" data-dismiss="modal">@lang('frontend.cancel')</button>
    </div>
</form>
</div>
@endsection