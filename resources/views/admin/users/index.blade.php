
@extends('layout_be.master')

@section('css')
@endsection

@section('header')
@include('layout_be.header')
@endsection

@section('body-title')

  <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">@lang('Danh Mục Người Dùng')</h1>
  <button class="btn btn-success" onclick="myFunction()"  role="button" data-toggle="modal" data-target="#modal_create">Create</button>
@endsection
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">@lang('first_name')</th>
      <th scope="col">@lang('middle_name')</th>
      <th scope="col">@lang('last_name')</th>
      <th scope="col">@lang('avater')</th>
      <th scope="col">@lang('email')</th>
      <th scope="col">@lang('username')</th>
      <th scope="col">@lang('Giới Tính')</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $c)
        <tr>
            <th scope="row">{{ $c->id }}</th>
            <td>{{ $c->first_name }}</td>
            <td>{{ $c->middle_name }}</td>
            <td>{{ $c->last_name }}</td>
            <td>
              <image src="/image/product/{{$c->avatar}}" with="800px" height="100px" width="100px    ">
          </td>
            <td>{{ $c->email }}</td>
            <td>{{ $c->username }}</td>
            <td>
              {{ $c->gender == 1 ? 'nam' : 'nữ' }}
          </td>
          <td>
            <button class="btn-modal-edit btn btn-success" onclick="myFunction2({{  $c->id }})"  role="button" data-id="{{  $c->id }}" data-toggle="modal" data-target="#modal_edit">Create</button>
           @include('admin.users.user-form-delete')
        </td>
        </tr>

       
    @endforeach
</tbody>
</table>
@include('admin.users.user-form')
@include('admin.users.user-js')



@endsection
@section('js')

@endsection



