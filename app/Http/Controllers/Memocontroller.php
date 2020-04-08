<?php

namespace App\Http\Controllers;

use  App\Models\User;
use  App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Memorequest;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;

class Memocontroller extends Controller
{
    // public function index(Request $request)
    // {
    //     //  次コメントアウトまでif文により制御
    //     if (isset($request->id)) {
    //         $parm = ['id' => $request->id];
    //         $items = DB::select('select * from memos where id = id', $parm);
    //     } else {
    //         $items = DB::select('select * from memos');
    //     }
    //     // 次行必要？
    //     // $items = User::all();
    //     return view('memos.index', ['items' => $items]);
    // }

    // 37行目までログインしているかどうか確認　もしログインしていない場合ログイン画面に
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $authority = Auth::user()->authority;
        $items = Memo::where('authority', '>=', $authority);
        return view('memos.index1', ['items' => $items->get()]);
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

    public function create(Memorequest $request)
    {
        $memo = Memo::create(
            [
                'title' => $request->title,
                'discription' => $request->discription,
                'createuser' => Auth::user()->name,
                'authority' => $request->authority,
                'memodetails' => $request->memodetails,
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
        $memo->createuser = $request->createuser;
        $memo->authority = $request->authority;
        $memo->update();
        return redirect('home/memo');
    }
    public function detail($id)
    {
        $item = Memo::find($id);
        // DD($item);
        if ($item === null) {
            return redirect('/home/memo');
        }
        $authority = Auth::user()->authority;
        $memoauthority = Memo::find($id)->authority;
        if ($authority > $memoauthority) {
            // DD($memoauthority);
            return redirect('/home/memo');
        }
        return view('memos.detail', ['form' => $item]);
    }
    public function detailrepair(Request $request)
    {
        $memo = Memo::find($request->id);
        $memo->memodetails = $request->memodetails;
        $memo->update();
        return redirect('home/memo');
    }





    public function del(Request $request)
    {
        return view('memos.del', ['form' => Memo::find($request->id)]);
    }

    public function remove(Request $request)
    {
        $memo = Memo::find($request->id);
        $memo->delete();
        return redirect('home/memo');
    }
}
