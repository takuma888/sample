<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'rememver_token'])->toArray());

        $user = User::find(1);
        $user->name = 'Rui';
        $user->email = 'takuma886@gmail.com';
        $user->password = bcrypt('kakalu');
        $user->is_admin = true;
        $user->activated = true;
        $user->save();
    }
}
