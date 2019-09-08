<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->user_type_id = 1;
        $user->fullname = "Veerapath Pothayee";
        $user->email = "veerapath784@gmail.com";
        $user->password = bcrypt('123456789');
        $user->address = "";
        $user->phone = "";
        $user->save();
    }
}
