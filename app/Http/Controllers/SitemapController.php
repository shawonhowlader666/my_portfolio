declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Response;

/**
 * Class SitemapController
 * 
 * Generates XML Sitemap for SEO.
 * 
 * @package App\Http\Controllers
 */
class SitemapController extends Controller
{
    /**
     * Generate and return the sitemap XML.
     *
     * @return Response
     */
    public function index(): Response
    {
        // Fetch projects from config
        $projects = collect(config('portfolio.projects'))->map(function($project) {
            return (object) $project;
        });

        // Start XML string
        // Broken into parts to prevent PHP short tag confusion
        $xml = '<' . '?xml version="1.0" encoding="UTF-8"?' . '>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Static URL: Home
        $xml .= '<url>';
        $xml .= '<loc>' . route('home') . '</loc>';
        $xml .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
        $xml .= '<changefreq>daily</changefreq>';
        $xml .= '<priority>1.0</priority>';
        $xml .= '</url>';

        // Dynamic URLs: Projects
        foreach ($projects as $project) {
            $xml .= '<url>';
            $xml .= '<loc>' . route('projects.show', $project->slug) . '</loc>';
            $xml .= '<lastmod>' . ($project->updated_at?->toAtomString() ?? now()->toAtomString()) . '</lastmod>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.8</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
