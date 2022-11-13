<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class usersTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'role' =>  1,
                'password' => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id' => 2,
                'name' => 'user2',
                'email' => 'user2@user.com',
                'role' =>  2,
                'password' => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id' => 3,
                'name' => 'user3',
                'email' => 'user3@user.com',
                'role' =>  2,
                'password' => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id' => 4,
                'name' => 'user4',
                'email' => 'user4@user.com',
                'role' =>  2,
                'password' => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id' => 5,
                'name' => 'user5',
                'email' => 'user5@user.com',
                'role' =>  2,
                'password' => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id' => 6,
                'name' => 'user6',
                'email' => 'user6@user.com',
                'role' =>  2,
                'password' => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id' => 7,
                'name' => 'user7',
                'email' => 'user7@user.com',
                'role' =>  2,
                'password' => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id' => 8,
                'name' => 'user8',
                'email' => 'user8@user.com',
                'role' =>  2,
                'password' => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id' => 9,
                'name' => 'user9',
                'email' => 'user9@user.com',
                'role' =>  2,
                'password' => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],
            [
                'id' => 10,
                'name' => 'user10',
                'email' => 'user10@user.com',
                'role' =>  2,
                'password' => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
            ],


    
        ];
        User::insert($users);
    }
}
