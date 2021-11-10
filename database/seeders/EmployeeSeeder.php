<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'name' => ' Doe',
            'email' => 'doejohn@gmail.com',
            'phone' => '1234567890',
            'department' => 'hr',
            'dob' => '2010-01-03',
        ]);
    }
}
