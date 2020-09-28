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
            'code'=>'SUP101',
            'name' => 'Supplier One',
            'phone' => '0710897867',
            'email'=>'supplier1@mail.com',
            'address' => '23/2 Colombo road, Jaffna, Sri Lanka',
            'bank_name' => 'Sampath Bank',
            'bank_branch' => 'Kollupitiya',
            'bank_acc_no' => '1234567892'
        ],[
            'id' => 2,
            'code'=>'SUP102',
            'name' => 'Supplier Two',
            'phone' => '0710897867',
            'email'=>'supplier2@mail.com',
            'address' => '50 Kandy road, Kadawatha, Sri Lanka',
            'bank_name' => 'Bank of Ceylon',
            'bank_branch' => 'Maharagama',
            'bank_acc_no' => '008978674'
        ]];

        Supplier::insert($suppliers);
    }
}
