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
        try {
            // Try to fetch from Database first
            $skills = Skill::all();
            $projects = Project::orderBy('sort_order')->get();

            // Double check: If DB returns empty (which might happen if tables are missing), use fallback
            if ($skills->isEmpty()) {
                throw new \Exception('No skills in DB');
            }
        } catch (\Exception $e) {
            // Fallback: Use config data so the site IS NEVER EMPTY
            $skills = collect(config('portfolio.skills'))->map(function($item) { return (object)$item; });
            $projects = collect(config('portfolio.projects'))->map(function($item) { return (object)$item; });
        }

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
