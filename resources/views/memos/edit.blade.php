@extends('layouts.app')

@section('title', 'edit')

@section('menubar')
@parent
更新ページ
@endsection

@section('content')
<table>
    <form action="edit" method="post">


        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
            <th>title:</th>
            <td><input type="text" name="title" value="{{$form->title}}"></td>
        </tr>
        <tr>
            <th>createuser:</th>
            <td><input type="text" name="createuser" value="{{$form->createuser}}"></td>
        </tr>
        {{-- <tr>
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
</table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
