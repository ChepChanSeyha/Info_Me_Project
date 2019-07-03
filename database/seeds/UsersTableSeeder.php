<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "\n Start initialize users\n";
        foreach (config('setting.users') as $userData) {
            $query = User::whereEmail($userData['email'])->first();
            if ($query === null) {
                $userData['password'] = bcrypt($userData['password']);
                $user = new User($userData);
                $user->save();
                echo "\n import user: " . $userData['email'] . "\n";
            }
        }
    }
}
