@extends('layouts.admilte')

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
            <th>name:</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>mail:</th>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <th>authority:</th>
            <td><input type="text" name="authority"></td>
        </tr>
        <tr>
            <th>password:</th>
            <td><input type="text" name="password"></td>
        </tr>

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
