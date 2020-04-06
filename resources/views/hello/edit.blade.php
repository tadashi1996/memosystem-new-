@extends('layouts.admilte')

@section('title', 'edit')

@section('menubar')
@parent
更新ページ
@endsection

@section('content')
<form action="edit" method="post">


    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$form->id}}">

    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" value="{{$form->name}}">

    <label for="email">Mail</label>
    <input type="text" class="form-control" name="email" value="{{$form->email}}">

    <label for="authority">Authority</label>
    <input type="text" class="form-control" name="authority" value="{{$form->authority}}">

    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Passwordを入力">
    <label for="password">Password confirm</label>
    <input type="password" class="form-control" name="password_confirmation" placeholder="確認Passwordを入力">
  @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card-footer">
        <input type="submit" class="btn btn-primary" value="send">
    </div>
    {{-- <tr>
            <th>name:</th>
            <td><input type="text" name="name" value="{{$form->name}}"></td>
    </tr>
    <tr>
        <th>mail:</th>
        <td><input type="text" name="email" value="{{$form->email}}"></td>
    </tr>
    <tr>
        <th>authority:</th>
        <td><input type="text" name="authority" value="{{$form->authority}}"></td>
    </tr>
    <tr>
        <th>password:</th>
        <td><input type="text" name="password" value="{{$form->password}}"></td>
    </tr>
    <tr>
        <th></th>
        <td><input type="submit" value="send"></td>
    </tr> --}}
</form>

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
