{{--url= localhost/home --}}
{{-- index1との違いを見比べる必要あり --}}

@extends('layouts.admilte')

@section('content')
<div class="card-body">
    <table id="myTable" class="table table-bordered table-hover">
        <tr>
            <th>Id</a></th>
            <th>Title</a></th>
            <th>Discription</a></th>
            <th>Createuser</a></th>
            <th>Authority</a></th>
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
</div>
<body>

    <div class="row">
        <div class=col-sm-12 col-md-7>
            <div class="dataTables_paginate paging_simple_numbers">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                    <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
@endsection

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {

        $('#myTable').DataTable({
            'paging': true
            , 'pageLength': 2
            , 'lengthChange': true
            , 'searching': true
            , 'ordering': true
            , 'info': true
            , 'autoWidth': false
            , 'scrollX': true
            , 'scrollY': true
            , 'order': [
                [0, 'asc']
            ]
            , "language": {
                "decimal": "."
                , "emptyTable": "表示するデータがありません。"
                , "info": "_START_ ～ _END_ / _TOTAL_ 件中"
                , "infoEmpty": "0 ～ 0 / 0 件"
                , "infoFiltered": "(合計 _MAX_ 件からフィルタリングしています)"
                , "infoPostFix": ""
                , "thousands": ","
                , "lengthMenu": "1ページ _MENU_ 件を表示する"
                , "loadingRecords": "読み込み中..."
                , "processing": "処理中..."
                , "search": "絞り込み:"
                , "zeroRecords": "一致するデータが見つかりません。"
                , "paginate": {
                    "first": "最初"
                    , "last": "最後"
                    , "next": "次"
                    , "previous": "前"
                }
            }
        });
    });

</script>

@section('footer')
copyright 2017 tuyano.
@endsection
