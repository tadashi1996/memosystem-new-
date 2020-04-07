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

    @if(Auth::user()->authority == 1 )
    <label for="authority">Authority</label>
    <select name='authority' class="form-control">>
        <option value="{{$form->authority}}">今のauthorityは{{$form->authority}}です。変更する場合は選択してください。</option>
        @foreach(config('authority') as $index => $authority)
        <option value="{{ $index }}">{{ $authority }}</option>
        @endforeach
    </select>
    @endif

    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Passwordを入力">
    <label for="password">Password confirm</label>
    <input type="password" class="form-control" name="password_confirmation" placeholder="確認Passwordを入力">
    {{-- 以下if文validatorの確認機能によるエラーメッセージ --}}
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
</form>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
