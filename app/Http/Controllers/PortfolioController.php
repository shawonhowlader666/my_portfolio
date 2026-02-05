<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Project;
use App\Models\Skill;

/**
 * Class PortfolioController
 * 
 * Handles strict display logic for the portfolio homepage and project details.
 * 
 * @package App\Http\Controllers
 */
class PortfolioController extends Controller
{
    /**
     * Display the main portfolio page with skills and projects.
     *
     * @return View
     */
    public function index(): View
    {
        // Hardcoded skills for Vercel
        $skills = collect([
            (object)['name' => 'Laravel', 'proficiency' => 90, 'category' => 'backend', 'icon' => 'devicon-laravel-plain colored'],
            (object)['name' => 'PHP', 'proficiency' => 95, 'category' => 'backend', 'icon' => 'devicon-php-plain colored'],
            (object)['name' => 'JavaScript', 'proficiency' => 85, 'category' => 'frontend', 'icon' => 'devicon-javascript-plain colored'],
            (object)['name' => 'Vue.js', 'proficiency' => 80, 'category' => 'frontend', 'icon' => 'devicon-vuejs-plain colored'],
            (object)['name' => 'Tailwind CSS', 'proficiency' => 95, 'category' => 'frontend', 'icon' => 'devicon-tailwindcss-plain colored'],
            (object)['name' => 'MySQL', 'proficiency' => 85, 'category' => 'database', 'icon' => 'devicon-mysql-plain colored'],
            (object)['name' => 'Git', 'proficiency' => 90, 'category' => 'tools', 'icon' => 'devicon-git-plain colored'],
        ]);

        // Hardcoded projects for Vercel
        $projects = collect([
            (object)[
                'title' => 'E-Commerce Platform',
                'slug' => 'e-commerce-platform',
                'description' => 'A robust multi-vendor e-commerce solution.',
                'image' => 'https://via.placeholder.com/600x400',
                'tech_stack' => ['Laravel', 'Vue.js', 'MySQL'],
                'live_link' => '#',
                'github_link' => '#'
            ],
            (object)[
                'title' => 'Personal Portfolio',
                'slug' => 'personal-portfolio',
                'description' => 'A sleek portfolio website with AI chatbot integration.',
                'image' => 'https://via.placeholder.com/600x400',
                'tech_stack' => ['Laravel', 'Alpine.js', 'Tailwind'],
                'live_link' => '#',
                'github_link' => '#'
            ]
        ]);

        return view('welcome', compact('skills', 'projects'));
    }

    /**
     * Display a single project's details based on slug.
     *
     * @param string $slug
     * @return View
     * 
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function show(string $slug): View
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        
        return view('projects.show', compact('project'));
    }
}
