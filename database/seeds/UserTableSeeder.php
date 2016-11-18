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
        $data = array(
			[
				'name' 		=> 'Jimmy', 
				'last_name' => 'Frias', 
				'email' 	=> 'Jimmy1923@live.com.mx', 
				'user' 		=> 'Jimmy',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'Nacajuca, Tabasco',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Carlos', 
				'last_name' => 'Pimienta', 
				'email' 	=> 'Carlos@hotmail.com', 
				'user' 		=> 'Carlos',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Cardenas, Tabasco',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}
