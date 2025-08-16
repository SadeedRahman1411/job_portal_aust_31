<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Applicant_contacts;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicant_contacts>
 */
class ApplicantContactsFactory extends Factory
{
    protected $model = Applicant_contacts::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => 'phone', // default, can be overridden
            'value' => '01' . $this->faker->numerify(str_repeat('#', 9)), // default phone
        ];
    }

    /**
     * Phone type state
     */
    public function phone(): self
    {
        return $this->state(fn () => [
            'value' => '01' . $this->faker->numerify(str_repeat('#', 9)),
        ]);
    }

    /**
     * Email type state
     */
    public function email(): self
    {
        return $this->state(fn () => [
            'value' => $this->faker->unique()->safeEmail(),
        ]);
    }

    /**
     * Set the type when creating
     */
    public function type(string $type): self
    {
        return $this->state(fn () => [
            'type' => $type,
            'value' => $type === 'phone'
                ? '01' . $this->faker->numerify(str_repeat('#', 9))
                : $this->faker->unique()->safeEmail(),
        ]);
    }
}

/*
    $table->foreignId('applicant_id')->constrained('applicants')->onDelete('cascade'); // Foreign Key → applicants.id
    $table->enum('type', ['phone', 'email']); // Type of contact (phone or email)
    $table->string('value'); // Value of the contact (phone number or email address)
*/