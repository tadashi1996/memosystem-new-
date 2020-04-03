@extends('layouts.admilte')

@section('content')

<title>Userlist @yield('title')</title>
<table class="table table-hover">
    <tr>
        <th><a href="/hello?sort=id">id</a></th>
        <th><a href="/hello?sort=name">name</a></th>
        <th><a href="/hello?sort=mail">mail</a></th>
        <th><a href="/hello?sort=authority">authority</a></th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->authority}}</td>
        <th><a class="button" href="/user/edit/{{$item->id}}">repair</a></th>
        <th><a href="/user/del/{{$item->id}}">delete</a></th>
    </tr>
    @endforeach
</table>
{{-- <a href="/memo/add" class=nav-link>メモ登録</a>
<a href="/home/memo" class=nav-link>メモ一覧</a> --}}
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
