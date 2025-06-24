<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Role::all();
        User::factory(10)->create()->each(function ($user) use($roles) {
            $user->roles()->attach(
                $roles->random(1)->pluck('id')->toArray()
            );

        });
    }
}
