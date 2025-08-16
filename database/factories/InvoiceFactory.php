<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['paid', 'unpaid', 'pending']);

        return [
            'customer_id' => Customer::factory(), // Create a new customer for each invoice taking from CustomerFactory
            'amount' => $this->faker->randomFloat(2, 10, 1000), // Random amount between 10 and 1000
            'status' => $status, // Random status
            'billed_date' => $this->faker->dateTimeThisDecade()->format('Y-m-d'), // Random date within the last year
            'paid_date' => $status === 'paid' ? $this->faker->dateTimeThisDecade() ->format('Y-m-d'): null, // If paid, set a random date
        ];
    }
}
