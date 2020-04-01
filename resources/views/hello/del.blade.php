@extends('layouts.app')

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
                <th></th>
                <td><input type="submit" value="delete"></td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection