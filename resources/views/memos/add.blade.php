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

    <label for="authority">authority</label>
    <select name='authority' class="form-control {{ $errors->has('authority') ? 'is-invalid' : '' }}">
        <option value="">Authority(選択してください)</option>
        @foreach(config('memoauthority') as $index => $authority)
        <option value="{{ $index }}">{{ $authority }}</option>
        @endforeach
    </select>
    <label for="memodetails">memodetails</label>
    <textarea name="memodetails" cols=50　rows="10" class="form-control" placeholder="メモの内容を入力"></textarea>
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
