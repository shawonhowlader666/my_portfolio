declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Subscriber;

/**
 * Class SubscriberController
 * 
 * Handles newsletter subscriptions.
 * 
 * @package App\Http\Controllers
 */
class SubscriberController extends Controller
{
    /**
     * Store a new subscriber.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email:rfc,dns|unique:subscribers,email|max:255',
        ]);

        try {
            Subscriber::create([
                'email' => $request->input('email'),
            ]);

            return back()->with('success', 'Thank you for subscribing! 🚀');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
