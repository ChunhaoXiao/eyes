<?php

use Illuminate\Database\Seeder;
use App\Models\Manager;

class ManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manager::firstOrCreate([
            'username' => 'admin',
        ], [
            'password' => 'admin',
            'nickname' => 'admin',
            'avatar' => 1,
            'shop' => 0,
            'doctor' => 0,
            'group_id' => 0,
            'status' => 1,
            'is_founder' => 1,
        ]);
    }
}
