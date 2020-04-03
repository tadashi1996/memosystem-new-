@extends('layouts.admilte')

@section('title', 'edit')

@section('menubar')
@parent
新規作成ページ
@endsection

@section('content')
<table>
    <form action="edit" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
            <th>メモ内容</th>
            <td>
                <textarea name="memodetails" cols=50　rows="10">{{$form->memodetails}}</textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>
</table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
