<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'semri',
            'password'  => password_hash('021206', PASSWORD_BCRYPT),
            'level' => 'admin'
        ];

        $this->db->table('users')->insert($data);
    }
}
