<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Portfolio Skills
    |--------------------------------------------------------------------------
    |
    | Add your skills here. Each skill should have a name, proficiency (0-100),
    | category (frontend, backend, database, tools), and a devicon class.
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
    | Portfolio Projects
    |--------------------------------------------------------------------------
    |
    | Add your projects here. Images should be in 'public/images/'.
    |
    */
    'projects' => [
        [
            'title' => 'E-Commerce Platform',
            'slug' => 'e-commerce-platform',
            'description' => 'A robust multi-vendor e-commerce solution built with Laravel and Vue.js. Features include secure payment processing, real-time order tracking, and an admin dashboard.',
            'image' => 'images/project1.jpg', // Place your image in public/images/ folder
            'tech_stack' => ['Laravel', 'Vue.js', 'MySQL', 'Stripe'],
            'live_link' => '#',
            'github_link' => 'https://github.com/yourusername/ecommerce'
        ],
        [
            'title' => 'Personal Portfolio',
            'slug' => 'personal-portfolio',
            'description' => 'A sleek, responsive portfolio website featuring a dynamic blog, project showcase, and an integrated AI chatbot for visitor interaction.',
            'image' => 'images/project2.jpg',
            'tech_stack' => ['Laravel', 'Alpine.js', 'Tailwind CSS'],
            'live_link' => '#',
            'github_link' => 'https://github.com/yourusername/portfolio'
        ],
        [
            'title' => 'Hospital Management System',
            'slug' => 'hospital-management',
            'description' => 'Comprehensive management system for hospitals including patient records, doctor scheduling, and billing management.',
            'image' => 'images/student_management.png',
            'tech_stack' => ['PHP', 'MySQL', 'Bootstrap'],
            'live_link' => '#',
            'github_link' => '#'
        ],
    ],
];
