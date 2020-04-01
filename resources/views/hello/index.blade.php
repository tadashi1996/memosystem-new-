{{--url= localhost/home --}}

@extends('layouts.app')

@section('content')

<table>
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
        <th><a href="/hello/edit/{{$item->id}}">repair</a></th>
        <th><a href="/hello/del/{{$item->id}}">delete</a></th>
        
    </tr>
    @endforeach
</table>

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
