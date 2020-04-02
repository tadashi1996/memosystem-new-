@extends('layouts.app')

@section('title', 'Add')

@section('menubar')
@parent
新規作成ページ
@endsection

@section('content')
<table>
    <form action="add" method="post">
        {{csrf_field()}}
        <tr>
            <th>title:</th>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <th>discription:</th>
            <td><input type="text" name="discription"></td>
        </tr>
        <tr>
            <th>createuser:</th>
            <td><input type="text" name="createuser"></td>
        </tr>
        <tr>
            <th>authority:</th>
            <td><input type="text" name="authority"></td>
        </tr>
        <tr>
            <th>メモ内容</th>
            <td><input type="text" name="memodetails">
                {{-- <textarea name="memodetails" name="memodetails"  cols=50　rows="10"></textarea> --}}
            </td>
        </tr>
        {{-- <tr>
            <th>password:</th>
            <td><input type="text" name="password"></td>
        </tr> --}}

        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>
</table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
