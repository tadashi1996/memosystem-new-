<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class User extends Model
{
    protected $fillable = ['name','email','authority','password'];
    // $id=Auth::user();
    // $mail=;
    // $pass=
    // $name=
    // $auth=
    // $$create
    //作成時刻はlaravelの機能にて管理

}
