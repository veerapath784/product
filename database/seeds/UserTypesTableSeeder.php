<?php

use Illuminate\Database\Seeder;
use App\UserType;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [
           ['id' => 1, 'name' => 'admin'],
           ['id' => 2 , 'name' => 'user']
       ];

       UserType::insert($data);
    }
}
