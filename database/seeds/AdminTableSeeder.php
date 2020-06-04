<?php

use Illuminate\Database\Seeder;
use App\Models\Manager;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manager::create([
            'username' => 'zs',
            'password' => '000000',
            'nickname' => '张三',
            'group_id' =>1,
            'avatar' => 1,
            'status' => 1,
        ]);
    }
}
