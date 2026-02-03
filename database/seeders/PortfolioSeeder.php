<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use App\Models\Project;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data
        Skill::truncate();
        Project::truncate();

        // --- SKILLS ---
        $skills = [
            // Frontend
            ['name' => 'HTML', 'category' => 'frontend', 'proficiency' => 95],
            ['name' => 'CSS', 'category' => 'frontend', 'proficiency' => 90],
            ['name' => 'Tailwind', 'category' => 'frontend', 'proficiency' => 85],
            ['name' => 'Bootstrap', 'category' => 'frontend', 'proficiency' => 85],
            ['name' => 'JavaScript', 'category' => 'frontend', 'proficiency' => 80],
            
            // Backend
            ['name' => 'PHP (Laravel)', 'category' => 'backend', 'proficiency' => 90],
            ['name' => 'MySQL', 'category' => 'backend', 'proficiency' => 85],
            ['name' => 'Firebase', 'category' => 'backend', 'proficiency' => 70],

            // Programming Languages
            ['name' => 'C / C++', 'category' => 'programming', 'proficiency' => 75],
            ['name' => 'Python', 'category' => 'programming', 'proficiency' => 70],

            // Mobile App Development
            ['name' => 'Flutter', 'category' => 'mobile', 'proficiency' => 60],

            // Tools
            ['name' => 'Git & GitHub', 'category' => 'tools', 'proficiency' => 85],
            ['name' => 'MS Office', 'category' => 'tools', 'proficiency' => 80],

            // Soft Skills
            ['name' => 'Communication', 'category' => 'soft', 'proficiency' => 95],
            ['name' => 'Problem Solving', 'category' => 'soft', 'proficiency' => 90],
            ['name' => 'Teamwork', 'category' => 'soft', 'proficiency' => 90],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // --- PROJECTS ---
        $projects = [
            [
                'title' => 'Student Management System',
                'slug' => 'student-management-system',
                'description' => 'Developed a full-stack student management with responsive user interface for all device sizes. Implemented student registration, course management, and result handling features. Used MySQL database with optimized SQL queries for fast data access. Added secure login and role-based access for admin and staff users.',
                'image' => null,
                'live_link' => null,
                'github_link' => 'https://github.com/Error000000000',
                'tech_stack' => ['PHP', 'Laravel', 'MySQL', 'HTML', 'CSS', 'JS', 'Bootstrap'],
                'featured' => true,
                'sort_order' => 1
            ],
            [
                'title' => 'Cycle Selling Website',
                'slug' => 'cycle-selling-website',
                'description' => 'Developed an e-commerce website for online cycle selling with a clean and responsive design. Implemented product listing and shopping cart features for smooth customer purchases. Built an admin panel to manage cycle products and pricing. Used MySQL database to store and manage product and order data.',
                'image' => null,
                'live_link' => null,
                'github_link' => 'https://github.com/Error000000000',
                'tech_stack' => ['PHP', 'Laravel', 'HTML', 'Tailwind CSS', 'JS', 'MySQL'],
                'featured' => true,
                'sort_order' => 2
            ],
            [
                'title' => 'AI-Based Fingerprint Blood Group Detection',
                'slug' => 'ai-fingerprint-blood-group',
                'description' => 'Developed a system to analyze fingerprint images for blood group prediction. Applied data preprocessing and feature extraction techniques. Evaluated model performance and planned web-based integration.',
                'image' => null,
                'live_link' => null,
                'github_link' => null,
                'tech_stack' => ['Python', 'Machine Learning', 'Image Processing'],
                'featured' => true,
                'sort_order' => 3
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
