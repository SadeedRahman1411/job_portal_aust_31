<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Organizations;
use App\Models\Organization_contacts;

class OrganizationsFactory extends Factory
{
    protected $model = Organizations::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory()->state(['role' => 'organization']),
            'company_name' => $this->faker->company(),
            'address' => $this->faker->address(),
        ];
    }

    public function configure(): self
    {
        return $this->afterCreating(function (Organizations $org) {

            // Create phone contacts (1–2)
            for ($i = 0; $i < $this->faker->numberBetween(1, 2); $i++) {
                Organization_contacts::factory()
                    ->type('phone')
                    ->create([
                        'organization_id' => $org->id,
                    ]);
            }

            // Create email contacts (1–2)
            for ($i = 0; $i < $this->faker->numberBetween(1, 2); $i++) {
                Organization_contacts::factory()
                    ->type('email')
                    ->create([
                        'organization_id' => $org->id,
                    ]);
            }

            // Create 1 website contact
            Organization_contacts::factory()
                ->type('website')
                ->create([
                    'organization_id' => $org->id,
                ]);
        });
    }
}
