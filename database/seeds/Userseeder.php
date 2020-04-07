<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'admin',
            'email' => 'admin@maebe.jp',
            'authority' => 1,
            'password' => bcrypt("password"),
        ];
        DB::table('users')->insert($data);
        //
    }
}
