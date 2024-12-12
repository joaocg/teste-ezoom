<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_name' => 'User Test 1',
                'user_email' => 'sdvdfb@gmail.com',
                'user_password' => '$2y$10$LITUhs0rOrIWyzutxxSLdeJgXvaRKk5yTCAcFm7dElyEJFdk8BnMq',
                'created_at' => '2020-09-26 06:33:25',
                'updated_at' => '2020-09-26 06:33:25',
            ],
            [
                'user_name' => 'User Test 2',
                'user_email' => 'sdvdfb2@gmail.com',
                'user_password' => '$2y$10$LITUhs0rOrIWyzutxxSLdeJgXvaRKk5yTCAcFm7dElyEJFdk8BnMq',
                'created_at' => '2020-09-26 06:34:50',
                'updated_at' => '2020-09-26 06:34:50',
            ],
            [
                'user_name' => 'User Test 3',
                'user_email' => 'mfikri@gmail.com',
                'user_password' => '$2y$10$LITUhs0rOrIWyzutxxSLdeJgXvaRKk5yTCAcFm7dElyEJFdk8BnMq',
                'created_at' => '2020-09-29 12:35:44',
                'updated_at' => '2020-09-29 12:35:44',
            ]
        ];

        // Simple Queries
        $this->db->table('users')->insertBatch($data);
    }
}
