{{--url= localhost/user --}}

@extends('layouts.app')

@section('content')

<table>
    <tr>
        <th><a href="/hello?sort=name">name</a></th>
        <th><a href="/hello?sort=mail">mail</a></th>
        <th><a href="/hello?sort=age">age</a></th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->age}}</td>
    </tr>
    @endforeach
</table>

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
