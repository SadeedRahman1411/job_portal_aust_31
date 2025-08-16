<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Applicants;
use App\Models\Applicant_contacts;
use App\Models\Jobs;

class ApplicantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create applicants with contacts
        $applicants1 = Applicants::factory()
            ->count(20)
            ->has(Applicant_contacts::factory()->count(2), 'contacts')
            ->create();

        $applicants2 = Applicants::factory()
            ->count(10)
            ->has(Applicant_contacts::factory()->count(3), 'contacts')
            ->create();
        
        $applicants3 = Applicants::factory()
            ->count(5)
            ->has(Applicant_contacts::factory()->count(0), 'contacts')
            ->create();    

        $applicants = $applicants1->merge($applicants2)->merge($applicants3);
         //applicants=sum of applicants(1:n)

        // 2. Assign completed jobs to applicants
        $completedJobs = Jobs::where('status', 'completed')->get();

        foreach ($applicants as $applicant) {
            if ($completedJobs->isEmpty()) {
                continue; // skip if no completed jobs exist
            }

            $jobsToAttach = $completedJobs->random(rand(1, min(2, $completedJobs->count())))->pluck('id')->toArray();

            $applicant->jobsCompleted()->attach($jobsToAttach, [
                'completed_at' => now()->subDays(rand(1, 30)),
            ]);
        }
    }
}