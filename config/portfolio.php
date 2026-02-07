<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Portfolio Skills (Fallback Data)
    |--------------------------------------------------------------------------
    |
    | This data is used ONLY if the database connection fails on Vercel.
    | It ensures the site never looks empty.
    |
    */
    'skills' => [
        [
            'name' => 'Laravel',
            'proficiency' => 90,
            'category' => 'backend',
            'icon' => 'devicon-laravel-plain colored'
        ],
        [
            'name' => 'PHP',
            'proficiency' => 95,
            'category' => 'backend',
            'icon' => 'devicon-php-plain colored'
        ],
        [
            'name' => 'JavaScript',
            'proficiency' => 85,
            'category' => 'frontend',
            'icon' => 'devicon-javascript-plain colored'
        ],
        [
            'name' => 'Vue.js',
            'proficiency' => 80,
            'category' => 'frontend',
            'icon' => 'devicon-vuejs-plain colored'
        ],
        [
            'name' => 'Tailwind CSS',
            'proficiency' => 95,
            'category' => 'frontend',
            'icon' => 'devicon-tailwindcss-plain colored'
        ],
        [
            'name' => 'MySQL',
            'proficiency' => 85,
            'category' => 'database',
            'icon' => 'devicon-mysql-plain colored'
        ],
        [
            'name' => 'Git',
            'proficiency' => 90,
            'category' => 'tools',
            'icon' => 'devicon-git-plain colored'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Portfolio Projects (Fallback Data)
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'title' => 'Student Management System',
            'slug' => 'student-management-system',
            'description' => 'A comprehensive student management system built with Laravel. It features student registration, course enrollment, grade management, and attendance tracking.',
            'image' => 'images/student_management.png',
            'tech_stack' => ['Laravel', 'MySQL', 'Bootstrap'],
            'live_link' => '#',
            'github_link' => '#',
            'sort_order' => 1
        ],
        [
            'title' => 'AI Fingerprint Analysis',
            'slug' => 'ai-fingerprint-analysis',
            'description' => 'An innovative AI-powered system for analyzing fingerprint patterns. Leveraging machine learning models to identify unique features with high accuracy.',
            'image' => 'images/fingerprint_ai.jpg',
            'tech_stack' => ['Python', 'TensorFlow', 'OpenCV'],
            'live_link' => '#',
            'github_link' => '#',
            'sort_order' => 2
        ],
        [
            'title' => 'Personal Portfolio',
            'slug' => 'personal-portfolio',
            'description' => 'My personal portfolio website built with Laravel and Tailwind CSS. Showcasing my skills, projects, and providing a way for clients to contact me.',
            'image' => 'images/boy_laptop.png', // Using existing asset as placeholder
            'tech_stack' => ['Laravel', 'Tailwind CSS', 'Alpine.js'],
            'live_link' => '#',
            'github_link' => '#',
            'sort_order' => 3
        ]
    ],
];
