<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		User::create([
			'name' => 'Felipe Seolin Bento',
			'email' => 'felipe.seolin@hotmail.com',
			'password' => bcrypt('1234')
		]);
//		\Illuminate\Support\Facades\DB::table('users')->insert([]);
    }
}
