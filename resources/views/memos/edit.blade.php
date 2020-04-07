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

    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" value="{{$form->title}}">

    <label for="discription">Discription</label>
    <input type="text" class="form-control" name="discription" value="{{$form->discription}}">

    <label for="createuser">Createuser</label>
    <input type="text" class="form-control" name="createuser" value="{{$form->createuser}}">

    <label for="authority">Authority</label>
    <select name='authority' class="form-control {{ $errors->has('authority') ? 'is-invalid' : '' }}">
        <option value="{{$form->authority}}">今のauthorityは{{$form->authority}}です。変更する場合は選択してください。</option>
        @foreach(config('memoauthority') as $index => $authority)
        <option value="{{ $index }}">{{ $authority }}</option>
        @endforeach
    </select>
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
