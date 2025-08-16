<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Organization_contacts;
use App\Models\Organization;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization_contacts>
 */
class Organization_contactsFactory extends Factory
{
    protected $model = Organization_contacts::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => 'phone',
            'value' => '01' . $this->faker->numerify(str_repeat('#', 9)),
        ];
    }

    /**
     * Set contact type and generate value accordingly
     */
    public function type(string $type): self
    {
        return $this->state(fn () => [
            'type' => $type,
            'value' => match($type) {
                'phone' => '01' . $this->faker->numerify(str_repeat('#', 9)),
                'email' => $this->faker->unique()->companyEmail(),
                'website' => 'https://' . $this->faker->domainName(),
                default => null,
            }
        ]);
    }
}
