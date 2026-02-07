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
        // Fetch skills from config (converted to objects for consistency)
        $skills = collect(config('portfolio.skills'))->map(function($skill) {
            return (object) $skill;
        });

        // Fetch projects from config
        $projects = collect(config('portfolio.projects'))->map(function($project) {
            return (object) $project;
        });

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
