<?php

use App\Supplier;
use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = [[
            'id' => 1,
            'code'=>'SUP102',
            'name' => 'Supplier One',
            'phone' => '0710897867',
            'email'=>'supplier1@mail.com',
            'address' => '23/2 Colombo road, Jaffna, Sri Lanka',
            'bank_name' => 'Sampath Bank',
            'bank_branch' => 'Kollupitiya',
            'bank_acc_no' => '1234567892'
        ]];

        Supplier::insert($suppliers);
    }
}
