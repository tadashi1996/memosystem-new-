@extends('layouts.admilte')

@section('content')

<title>Userlist @yield('title')</title>
@if(Auth::check())
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
        @if(Auth::user()->authority==1)
        <th><a class="button" href="/user/edit/{{$item->id}}">repair</a></th>
        <th><a href="/user/del/{{$item->id}}">delete</a></th>
        @elseif($item->id == Auth::user()->id )
        <th><a class="button" href="/user/edit/{{$item->id}}">repair</a></th>
        <th><a href="/user/del/{{$item->id}}">delete</a></th>
        @endif


    </tr>
    @endforeach
</table>
@endif

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
