{{--url= localhost/home --}}

@extends('layouts.admilte')

@section('content')  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../../vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<div class="card-body">
    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Discription</th>
                <th>Createuser</th>
                <th>Authority</th>
                <th>メモ詳細</th>
                <th>更新</th>
                <th>削除</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <th>{{$item->id}}</th>
                <td>{{$item->title}}</td>
                <td>{{$item->discription}}</td>
                <td>{{$item->createuser}}</td>
                <td>{{$item->authority}}</td>
                <td><a href="/memo/detail/{{$item->id}}">memoDetail</a></td>
                <td><a href="/memo/edit/{{$item->id}}">repair</a></td>
                <td><a href="/memo/del/{{$item->id}}">delete</a></td>
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
