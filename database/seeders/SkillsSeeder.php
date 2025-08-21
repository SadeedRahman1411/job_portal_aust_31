<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skills;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Programming & IT
            'Python', 'Java', 'C++', 'JavaScript', 'HTML', 'CSS', 
            'SQL', 'MongoDB', 'AWS', 'Azure', 'Machine Learning', 
            'Data Analysis', 'Data Visualization', 'Cybersecurity Fundamentals',
            'Search Engine Optimization (SEO)', 'UX/UI Design', 'Typing & Transcription',

            // Engineering
            'Mechanical Design', 'Electrical Circuit Design', 'Civil Engineering Drafting', 
            'AutoCAD', 'SolidWorks', 'MATLAB', 'Project Management (Engineering)',

            // Medical & Healthcare
            'Patient Care', 'Medical Documentation', 'Phlebotomy', 'CPR', 'Surgical Assistance', 
            'Medical Coding', 'Healthcare Administration',

            // Teaching & Education
            'Lesson Planning', 'Curriculum Development', 'Classroom Management', 
            'Educational Technology', 'Special Needs Education', 'Student Assessment',

            // Business & Management
            'Project Management (General)', 'Team Leadership', 'Financial Analysis', 
            'Marketing Strategy', 'Sales Management', 'Business Analytics',

            // Miscellaneous / Soft Skills
            'Communication Skills', 'Critical Thinking', 'Problem Solving', 'Time Management', 
            'Negotiation', 'Public Speaking', 'Foreign Language Proficiency',
        ];

        foreach ($skills as $skill) {
            Skills::create(['skill_name' => $skill]);
        }
    }
}
