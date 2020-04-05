<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('TaiKhoan')->insert([
            'Username' =>'LamVanTan',
            'password' => Hash::make('123456'),
            'Ten'=>'Tan',
            'Ho'=>'Lam',
            'GioiTinh'=>'0',
            
        ]);
    }
}
