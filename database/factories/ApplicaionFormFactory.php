<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Applicaion_Form;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicaion_Form>
 */
class ApplicaionFormFactory extends Factory
{
    protected $model = Applicaion_Form::class;

    public function definition(): array
    {
        return [
            'applicant_id' => null, // pass this when creating
            'job_id' => null,       // pass this when creating
            'status' => $this->faker->randomElement(['pending', 'rejected']),
            'cover_letter' => $this->faker->paragraph(2),
            'skills' => [], // will be set from applicant profile when creating
            'resume' => 'resumes/' . $this->faker->word() . '.pdf',
            'applied_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
