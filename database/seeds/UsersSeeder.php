<?php  

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();

        $users = [
            [
                "name" => "Marcio",
                "password" => Hash::make("123456"),
                "email"    => "msartini@gmail.com"
            ]
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
