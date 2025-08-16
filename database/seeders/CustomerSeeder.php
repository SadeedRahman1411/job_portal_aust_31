<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Customer::factory() //
       ->count(50) // Create 50 customers
       ->hasInvoices(3) // Each customer has 3 invoices
            ->create(); // Persist them to the database
            
            Customer::factory() //
       ->count(25) // Create 25 customers
       ->hasInvoices(5) // Each customer has 5 invoices
            ->create(); // Persist them to the database

         Customer::factory() //
         ->count(10) // Create 10 customers with no invoices
         ->hasInvoices(0) // Each customer has 0 invoices
                ->create(); // Persist them to the database



    }
}
