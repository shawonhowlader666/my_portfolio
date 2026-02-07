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
            'title' => 'E-Commerce Platform',
            'slug' => 'e-commerce-platform',
            'description' => 'A robust multi-vendor e-commerce solution built with Laravel and Vue.js. Features include secure payment processing, real-time order tracking, and an admin dashboard.',
            'image' => 'images/project1.jpg',
            'tech_stack' => ['Laravel', 'Vue.js', 'MySQL'],
            'live_link' => '#',
            'github_link' => '#',
            'sort_order' => 1
        ],
        [
            'title' => 'Personal Portfolio',
            'slug' => 'personal-portfolio',
            'description' => 'A sleek, responsive portfolio website featuring a dynamic blog, project showcase, and an integrated AI chatbot for visitor interaction.',
            'image' => 'images/project2.jpg',
            'tech_stack' => ['Laravel', 'Alpine.js', 'Tailwind CSS'],
            'live_link' => '#',
            'github_link' => '#',
            'sort_order' => 2
        ]
    ],
];
