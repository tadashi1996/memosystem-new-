<?php

namespace App\Http\Controllers;

use  App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HelloRequest;

class Memocontroller extends Controller
{
    public function index(Request $request)
    {
        //  次コメントアウトまでif文により制御
        if (isset($request->id)) {
            $parm = ['id' => $request->id];
            $items = DB::select('select * from memos where id = id', $parm);
        } else {
            $items = DB::select('select * from memos');
        }
        // 次行必要？
        // $items = User::all();
        return view('memos.index', ['items' => $items]);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'msg' => 'required',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = new Response(view('hello.index', ['msg' =>
        '「' . $msg . '」をクッキーに保存しました。']));
        $response->cookie('msg', $msg, 100);
        return  $response;
    }

    public function add(Request $request)
    {
        return view('memos.add');
    }

    public function create(Request $request)
    {
        $memo = Memo::create(
            [
                // 'id' => $request->id,
                'title' => $request->title,
                'discription' => $request->discription,
                'authority' => $request->authority,
            ]
        );
        return redirect('/home/memo');
    }

    public function edit($id)
    {
        return view('memos.edit', ['form' => Memo::find($id)]);
    }

    public function update(Request $request)
    {
        $memo = Memo::find($request->id);
        $memo->title = $request->title;
        $memo->discription = $request->discription;
        $memo->authority = $request->authority;
        // $memo->authority = $request->authority;
        $memo->update();
        return redirect('home');
    }
}
