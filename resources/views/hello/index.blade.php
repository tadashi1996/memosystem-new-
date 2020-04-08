{{--url= localhost/home --}}
{{-- @if(Auth::check())
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
@endif --}}



@extends('layouts.admilte')

@section('content')

<div class="card-body">
    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Mail</th>
                <th>Authority</th>
                <th>更新</th>
                <th>削除</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <th>{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->authority}}</td>
                @if(Auth::user()->authority==1)
                <td><a href="/memo/edit/{{$item->id}}">repair</a></td>
                <td><a href="/memo/del/{{$item->id}}">delete</a></td>
                @elseif($item->id == Auth::user()->id )
                <th><a class="button" href="/user/edit/{{$item->id}}">repair</a></th>
                <th><a href="/user/del/{{$item->id}}">delete</a></th>
                @elseif(Auth::user()->authority!==1)
                <td></td>
                <td></a></td>
                @endif

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')

<script src="/vendor/adminlte/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->

<script src="/vendor/adminlte/dist/plugins/datatables/jquery.dataTables.min.js"></script>

<script src="/vendor/adminlte/dist/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="/vendor/adminlte/dist/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script src="/vendor/adminlte/dist/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->

<script src="/vendor/adminlte/dist/js/adminlte.min.js"></script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true
            , "autoWidth": false
        , });
    });

</script>
@stop
