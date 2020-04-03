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
    <input type="text" class="form-control" name="authority" value="{{$form->authority}}">
    {{-- <label for="memodetails">memodetails</label>
        <textarea name="memodetails" cols=50　rows="10" class="form-control" placeholder="メモの内容を入力"></textarea> --}}
    {{-- <tr>
                <th>title:</th>
                <td><input type="text" name="title" value="{{$form->title}}"></td>
    </tr>
    <tr>
        <th>createuser:</th>
        <td><input type="text" name="createuser" value="{{$form->createuser}}"></td>
    </tr>
    <tr>
        <th>discription:</th>
        <td><input type="text" name="discription" value="{{$form->discription}}"></td>
    </tr>
    <tr>
        <th>authority:</th>
        <td><input type="text" name="authority" value="{{$form->authority}}"></td>
    </tr>
    <tr>
        <th></th>
        <td><input type="submit" value="send"></td>
    </tr> --}}

    <div class="card-footer">
        <input type="submit" class="btn btn-primary" value="send">
    </div>
</form>

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
