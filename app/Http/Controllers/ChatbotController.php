<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\JsonResponse;

/**
 * Class ChatbotController
 * 
 * Handles AI chat interactions using Google Gemini API with a robust local fallback system.
 * 
 * @package App\Http\Controllers
 */
class ChatbotController extends Controller
{
    /**
     * Handle the chat request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function chat(Request $request): JsonResponse
    {
        // Simple Validation
        $request->validate([
            'message' => 'required|string|max:500',
        ]);

        $userMessage = $request->input('message');
        $apiKey = config('services.gemini.key');

        // 1. If API Key is missing, use Fallback immediately
        if (empty($apiKey)) {
            return response()->json(['reply' => $this->getFallbackResponse($userMessage)]);
        }

        // 2. Try Gemini API
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key={$apiKey}", [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $this->getSystemPrompt($userMessage)]
                        ]
                    ]
                ]
            ]);

            // Log API Status
            Log::info("Gemini API Response Status: " . $response->status());

            if ($response->successful()) {
                $data = $response->json();
                $aiReply = $data['candidates'][0]['content']['parts'][0]['text'] ?? null;

                if ($aiReply) {
                    return response()->json(['reply' => $aiReply]);
                }
            }

            // If API fails (Rate Limit / Error), fall through to fallback
            Log::warning("Gemini API Unsuccessful. Status: " . $response->status());

        } catch (\Exception $e) {
            Log::error("Gemini Chat Exception: " . $e->getMessage());
        }

        // 3. Final Fallback if API fails or throws exception
        return response()->json(['reply' => $this->getFallbackResponse($userMessage)]);
    }

    /**
     * Generate the system prompt with context.
     *
     * @param string $userMessage
     * @return string
     */
    private function getSystemPrompt(string $userMessage): string
    {
        return "You are a friendly and professional AI Assistant for 'Shawon', a Full Stack Web Developer. 
        Your goal is to help visitors understand Shawon's skills, experience, and projects.
        
        Key Info about Shawon:
        - Skills: PHP, Laravel, Vue.js, Alpine.js, Tailwind CSS, MySQL, JavaScript.
        - Experience: 3+ Years in Web Development.
        - Services: Custom Web App Development, E-commerce, API Integration.
        - Contact: shawonhawlader1044@gmail.com.
        
        Rules:
        - Keep answers concise (under 2-3 sentences preferred).
        - Be enthusiastic and polite.
        - If asked about hiring, encourage them to use the contact form or email.
        - If you don't know something specific, suggest emailing Shawon.
        
        User Query: " . $userMessage;
    }

    /**
     * Get a local fallback response based on keywords.
     *
     * @param string $input
     * @return string
     */
    private function getFallbackResponse(string $input): string
    {
        $inputLower = strtolower($input);

        $rules = [
            'greetings' => [
                'keywords' => ['hi', 'hello', 'hey', 'greetings', 'salam', 'test'],
                'response' => "Hello there! 👋 I am Shawon's AI assistant. Even if my brain is tired (API unavailable), I'm here to help! How can I assist you today?"
            ],
            'skills' => [
                'keywords' => ['skill', 'stack', 'technology', 'tech', 'language', 'php', 'laravel'],
                'response' => "Shawon is an expert in **Full Stack Development**! 💻\nHis core stack includes:\n- **Backend:** Laravel, PHP, MySQL\n- **Frontend:** Vue.js, Alpine.js, Tailwind CSS\n- **Tools:** Git, Docker, Vite"
            ],
            'experience' => [
                'keywords' => ['experience', 'work', 'history', 'job', 'year'],
                'response' => "Shawon has **3+ Years of Experience** in building scalable web applications. He has worked on various projects ranging from E-commerce platforms to School Management Systems."
            ],
            'projects' => [
                'keywords' => ['project', 'portfolio', 'built', 'demo'],
                'response' => "You can scroll down to the **Projects Section** to see some amazing work! He has built Custom CRMs, E-commerce sites, and more."
            ],
            'contact' => [
                'keywords' => ['contact', 'email', 'phone', 'reach', 'address'],
                'response' => "You can contact Shawon directly at: **shawonhawlader1044@gmail.com** 📧\nOr simply use the contact form at the bottom of the page!"
            ],
            'availability' => [
                'keywords' => ['hire', 'freelance', 'available', 'job', 'contract'],
                'response' => "Yes! Shawon is currently **Available** for freelance and remote opportunities. 🚀 Let's build something great together!"
            ],
            'pricing' => [
                'keywords' => ['price', 'cost', 'rate', 'charge', 'quote'],
                'response' => "Rates depend on the project requirements. Please send a message via the contact form with your project details for a free quote!"
            ],
            'about' => [
                'keywords' => ['about', 'who', 'shawon', 'developer'],
                'response' => "Shawon is a passionate **Software Engineer** dedicated to building clean, efficient, and user-friendly web solutions."
            ],
            'resume' => [
                'keywords' => ['resume', 'cv', 'download'],
                'response' => "You can download Shawon's detailed **Resume** by clicking the blue 'Download Resume' button in the Hero section above! 📄"
            ],
            'location' => [
                'keywords' => ['location', 'where', 'country', 'live'],
                'response' => "Shawon is based in **Dhaka, Bangladesh** 🇧🇩 but works with clients globally via remote work."
            ],
            'education' => [
                'keywords' => ['education', 'study', 'university', 'degree'],
                'response' => "Shawon holds a **Bachelor of Science in Computer Science and Engineering (CSE)**. 🎓"
            ],
            'services' => [
                'keywords' => ['service', 'offer', 'do'],
                'response' => "Shawon offers:\n✅ Custom Web App Development\n✅ API Development & Integration\n✅ E-commerce Solutions\n✅ Bug Fixing & Performance Optimization"
            ],
        ];

        foreach ($rules as $rule) {
            foreach ($rule['keywords'] as $keyword) {
                if (str_contains($inputLower, $keyword)) {
                    return $rule['response'];
                }
            }
        }

        return "I'm currently updating my AI models to serve you better. Please try asking about 'Skills', 'Projects', or 'Contact' in the meantime! 🚀";
    }
}
