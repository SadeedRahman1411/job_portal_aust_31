<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organizations;
use App\Models\Organization_contacts;
use App\Models\Jobs;

class OrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organizations::factory()
            ->count(10) // create 10 organizations
            ->has(Organization_contacts::factory()->count(2), 'contacts') // each org has 2 contacts
            ->has(Jobs::factory()->count(3), 'jobs') // each org has 3 jobs
            ->create();

         Organizations::factory()
            ->count(15) // create 10 organizations
            ->has(Organization_contacts::factory()->count(4), 'contacts') // each org has 2 contacts
            ->has(Jobs::factory()->count(5), 'jobs') // each org has 3 jobs
            ->create();

         Organizations::factory()
            ->count(5) // create 10 organizations
            ->has(Organization_contacts::factory()->count(1), 'contacts') // each org has 2 contacts
            ->has(Jobs::factory()->count(2), 'jobs') // each org has 3 jobs
            ->create();

    
    }
}
