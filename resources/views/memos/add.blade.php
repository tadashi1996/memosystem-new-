@extends('layouts.admilte')

@section('title', 'Add')

@section('menubar')
@parent
新規作成ページ
@endsection

@section('content')
{{-- <table> --}}
<form action="add" method="post" class=card-body>
    {{csrf_field()}}
    {{-- <tr> --}}
    {{-- コメントアウト分=24行目、25行目同じ
            <tr>
            <th class="exampleInputEmail1">title:</th>
            <td><input type="text" class="form-control name="title"></td>
            </tr> --}}
    <label for="title">title</label>
    <input type="text" class="form-control" name="title" placeholder="Title">

    <label for="discription">discription</label>
    <input type="text" class="form-control" name="discription" placeholder="Discription">

    <label for="createuser">createuser</label>
    <input type="text" class="form-control" name="createuser" placeholder="Createuser">

    <label for="authority">authority</label>
    <input type="text" class="form-control" name="authority" placeholder="Authority">

    <label for="memodetails">memodetails</label>
    <textarea name="memodetails" cols=50　rows="10" class="form-control" placeholder="メモの内容を入力"></textarea>
    {{-- <td><input type="text"class="form-control" name="memodetails" placeholder="メモの内容を入力"></td> --}}

    <div class="card-footer">
        <input type="submit" class="btn btn-primary" value="send">
    </div>
</form>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
