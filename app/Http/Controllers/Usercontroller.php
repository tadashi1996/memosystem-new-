<?php

namespace App\Http\Controllers;

use  App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HelloRequest;

class Usercontroller extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'authority' => ['required', 'string',],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function index(Request $request)
    {
        //  次コメントアウトまでif文により制御
        if (isset($request->id)) {
            $parm = ['id' => $request->id];
            $items = DB::select('select * from users where id = id', $parm);
        } else {
            $items = DB::select('select * from users');
        }
        // 次行必要？
        // $items = User::all();
        return view('hello.index', ['items' => $items]);
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

    // public function add(Request $request)
    // {
    //     return view('hello.add');
    // }

    // public function create(Request $request)
    // {
    //     $user = User::create(
    //         [
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'authority' => $request->authority,
    //             'password' => $request->password,
    //         ]
    //     );
    //     return redirect('/home');
    // }

    public function edit($id)
    {
        return view('hello.edit', ['form' => User::find($id)]);
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->authority = $request->authority;
        // $user->password = $request->password;
        $user->password = Hash::make($request['authority']);
        // 'password' => Hash::make($data['password']),
        $user->update();
        return redirect('home');
    }

    public function del(Request $request)
    {
        return view('hello.del', ['form' => User::find($request->id)]);
    }

    public function remove(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return redirect('home');
    }
}

function Validator(array $data)
{
    return Validator::make($data, [
        'name'     => 'required|string|max:255',
        'gender'   => 'required',
        'age'      => 'required|integer',
        'email'    => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);
}
// 以下不明2020.04.01　10：30
//     protected function create(array $data)
//     {
//         return User::create([
//             'name'     => $data['name'],
//             'gender'   => $data['gender'],
//             'age'      => $data['age'],
//             'email'    => $data['email'],
//             'password' => Hash::make($data['password']),
//         ]);
//     }
