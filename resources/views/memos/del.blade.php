@extends('layouts.admilte')

@section('title', 'Delete')

@section('menubar')
@parent
削除ページ
@endsection

@section('content')
<table>
    <form action="del" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
            <th>title:</th>
            <td><input type="text" name="title" value="{{$form->title}}"></td>
        </tr>
        <tr>
            <th>discription:</th>
            <td><input type="text" name="discription" value="{{$form->discription}}"></td>
        </tr>
        <tr>
            <th>createuser:</th>
            <td><input type="text" name="createuser"></td>
        </tr>
        <tr>
            <th>authority:</th>
            <td><input type="text" name="authority" value="{{$form->authority}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="delete"></td>
        </tr>
    </form>
</table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
