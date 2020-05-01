<?php

use Illuminate\Database\Seeder;
use App\Models\Store;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 24)->create()->each(function($user){
            $user->userStore()->save(factory(Store::class)->make());
        });
    }
}
