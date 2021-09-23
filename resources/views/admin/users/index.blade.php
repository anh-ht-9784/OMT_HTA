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
            @foreach ($data as $c)
                <tr>
                    <th scope="row">{{ $c->id }}</th>
                    <td>{{ $c->username }}</td>
                    <td>{{ $c->first_name }}</td>
                    <td>{{ $c->middle_name }}</td>
                    <td>{{ $c->last_name }}</td>
                    <td>
                        <image src="/image/product/{{ $c->avatar }}" with="800px" height="100px" width="100px    ">
                    </td>
                    <td>{{ $c->email }}</td>
                    <td>
                        {{ $c->gender == 1 ? 'nam' : 'nữ' }}
                    </td>
                    <td>
                        <button class="btn-modal-edit btn btn-primary" onclick="myFunction()" onclick="userEdit({{ $c->iduser }})"
                            role="button" data-id="{{ $c->id }}" data-toggle="modal"
                            data-target="#modal_edit">@lang('user.edit')</button>
                            @include('admin.users.user-form-delete')

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