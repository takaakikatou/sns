<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        \DB::table('employees')->insert([
            [
                'dept_id' => '1',
                'name' => '川端 莉緒',
                'email' => 'kawabata_rio@example.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
            [
                'dept_id' => '2',
                'name' => '小玉 隆博',
                'email' => 'kodama_takahiro@example.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'dept_id' => '3',
                'name' => '岩井 圭',
                'email' => 'iwai_kei@example.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
