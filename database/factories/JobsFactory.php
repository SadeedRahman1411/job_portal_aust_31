<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Jobs;
use App\Models\Organizations;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    protected $model = Jobs::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $employmentTypes = ['full-time', 'part-time', 'internship', 'contract'];
        $statusOptions = ['enlisted', 'in_progress', 'completed'];

        return [
            //'organization_id' => Organizations::factory(), // Associate with an organization
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(3),
            'requirements' => json_encode($this->faker->words(5)), // store as JSON
            'location' => $this->faker->city(),
            'salary_range' => $this->faker->numberBetween(20000, 150000) . '-' . $this->faker->numberBetween(160000, 300000),
            'employment_type' => $this->faker->randomElement($employmentTypes),
            'deadline' => $this->faker->dateTimeBetween('now', '+2 months'),
            'posted_at' => now(),
            'status' => $this->faker->randomElement($statusOptions),
        ];
    }
}
