{{--url= localhost/home --}}

@extends('layouts.admilte')

@section('content')

<table class="table table-hover">
    <tr>
        <th><a href="/memo?sort=id">id</a></th>
        <th><a href="/memo?sort=title">title</a></th>
        <th><a href="/memo?sort=discription">discription</a></th>
        <th><a href="/memo?sort=createuser">createuser</a></th>
        <th><a href="/memo?sort=authority">authority</a></th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->discription}}</td>
        <td>{{$item->createuser}}</td>
        <td>{{$item->authority}}</td>
        <th><a href="/memo/detail/{{$item->id}}">memoDetail</a></th>
        <th><a href="/memo/edit/{{$item->id}}">repair</a></th>
        <th><a href="/memo/del/{{$item->id}}">delete</a></th>

    </tr>
    @endforeach
</table>

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
