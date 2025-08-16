<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Interview;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interview>
 */
class InterviewFactory extends Factory
{
    protected $model = Interview::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'application_id' => null, // pass the related application when creating
            'interview_date' => $this->faker->dateTimeBetween('now', '+2 weeks'),
            'status' => $this->faker->optional()->randomElement(['selected', 'rejected']),
            'notes' => $this->faker->optional()->paragraph(1),
        ];
    }
}
