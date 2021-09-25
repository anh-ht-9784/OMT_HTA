@extends('layout_be.master')

@section('css')

@endsection

@section('header')
    @include('layout_be.header')
@endsection

@section('body-title')

    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">@lang('Danh Mục Người
        Dùng')</h1>
    <div style="float: right;margin-bottom: 2rem">
        <button class="btn btn-success" onclick="myFunction()" role="button" data-toggle="modal"
            data-target="#modal_create">@lang('user.create_user')</button>
        {{-- creatr --}}
        <div class="test-modal modal fade" name="testmodal" id="modal_create" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                @include('admin.users.user-form')
            </div>
        </div>
        {{--  --}}
    </div>
@endsection
@section('content')
    <table class="table " id="myTable"> 
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">@lang('user.username')</th>
                <th scope="col">@lang('user.first_name')</th>
                <th scope="col">@lang('user.middle_name')</th>
                <th scope="col">@lang('user.last_name')</th>
                <th scope="col">@lang('user.avatar')</th>
                <th scope="col">@lang('user.email')</th>
                <th scope="col">@lang('user.gender')</th>
                <th scope="col">@lang('user.action ')</th>

            </tr>
        </thead> 
        <tbody>
            @foreach ($userlist as $userlist)
                <tr>
                    <th scope="row">{{ $userlist->id }}</th>
                    <td>{{ $userlist->username }}</td>
                    <td>{{ $userlist->first_name }}</td>
                    <td>{{ $userlist->middle_name }}</td>
                    <td>{{ $userlist->last_name }}</td>
                    <td>
                        <image src="/image/product/{{ $userlist->avatar }}" with="800px" height="100px" width="100px    ">
                    </td>
                    <td>{{ $userlist->email }}</td>
                    <td>
                        {{ $userlist->gender == 1 ? 'nam' : 'nữ' }}
                    </td>
                    <td>
                        <button class="modal_user_edit btn btn-primary" 
                            role="button" data-id="{{ $userlist->id }}" data-toggle="modal"
                            data-target="#modal_edit">@lang('user.edit')</button>
                            <div>
                                <button class="user-delete button btn btn-danger"  data-id="{{$userlist->id}}" >@lang('user.delete')</button>
                            </div>

                    </td>
                </tr>


            @endforeach
        </tbody>
    </table>

    {{-- creatr --}}
    <div class="test-modal modal fade" name="testmodal" id="modal_edit" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            @include('admin.users.user-form')
        </div>
    </div>
    {{--  --}}
   



@endsection
@push('script')
@include('admin.users.user-js')
@endpush