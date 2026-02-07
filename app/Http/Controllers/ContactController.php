declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Mail\ContactMail;

/**
 * Class ContactController
 * 
 * Handles contact form submissions with spam protection and email delivery.
 * 
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    /**
     * Handle the incoming contact form request.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function sendEmail(Request $request): RedirectResponse
    {
        // 🍯 Honeypot Check - If the hidden 'website' field is filled, it's a bot!
        if ($request->filled('website')) {
            // Silently reject (act as if successful to fool the bot)
            return back()->with('success', 'Message sent successfully!');
        }

        // Validate Input
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email:rfc,dns|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:2000',
            'terms' => 'accepted'
        ]);

        // Process Phone Number (Avoid double prefixing)
        $phone = $validated['phone'] ?? null;
        if ($phone) {
            // Remove any existing +880 or 880 to sanitize
            $cleanPhone = preg_replace('/^(\+880|880|0)/', '', $phone);
            $phone = '+880' . $cleanPhone;
        }

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $phone,
            'message' => $validated['message']
        ];

        // Send Email with Safety
        try {
            Mail::to('shawonhawlader1044@gmail.com')->send(new ContactMail($data));
        } catch (\Exception $e) {
            // Silently fail but log error if needed
            // return back()->with('success', 'Message sent successfully!');
        }

        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
    }
}
