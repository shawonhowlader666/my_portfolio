<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function chat(Request $request)
    {
        $message = $request->input('message');
        
        // System Prompt to guide the AI
        $context = "You are a friendly and professional AI Assistant for 'Shawon', a Full Stack Web Developer. 
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
        
        User Query: " . $message;

        $apiKey = config('services.gemini.key');
        $reply = "";

        // Function to get Local Fallback Response
        $getLocalResponse = function($input) {
            $rules = [
                ['keywords' => ['hi', 'hello', 'hey', 'greetings', 'salam', 'test'], 'response' => "Hello there! 👋 I am Shawon's AI assistant. Even if my brain is tired, I'm here to help! How can I assist you today?"],
                ['keywords' => ['skill', 'stack', 'technology', 'tech', 'language', 'php', 'laravel'], 'response' => "Shawon is an expert in **Full Stack Development**! 💻\nHis core stack includes:\n- **Backend:** Laravel, PHP, MySQL\n- **Frontend:** Vue.js, Alpine.js, Tailwind CSS\n- **Tools:** Git, Docker, Vite"],
                ['keywords' => ['experience', 'work', 'history', 'job', 'year'], 'response' => "Shawon has **3+ Years of Experience** in building scalable web applications. He has worked on various projects ranging from E-commerce platforms to School Management Systems."],
                ['keywords' => ['project', 'portfolio', 'built', 'demo'], 'response' => "You can scroll down to the **Projects Section** to see some amazing work! He has built Custom CRMs, E-commerce sites, and more."],
                ['keywords' => ['contact', 'email', 'phone', 'reach', 'address'], 'response' => "You can contact Shawon directly at: **shawonhawlader1044@gmail.com** 📧\nOr simply use the contact form at the bottom of the page!"],
                ['keywords' => ['hire', 'freelance', 'available', 'job', 'contract'], 'response' => "Yes! Shawon is currently **Available** for freelance and remote opportunities. 🚀 Let's build something great together!"],
                ['keywords' => ['price', 'cost', 'rate', 'charge', 'quote'], 'response' => "Rates depend on the project requirements. Please send a message via the contact form with your project details for a free quote!"],
                ['keywords' => ['about', 'who', 'shawon', 'developer'], 'response' => "Shawon is a passionate **Software Engineer** dedicated to building clean, efficient, and user-friendly web solutions."],
                ['keywords' => ['resume', 'cv', 'download'], 'response' => "You can download Shawon's detailed **Resume** by clicking the blue 'Download Resume' button in the Hero section above! 📄"],
                ['keywords' => ['location', 'where', 'country', 'live'], 'response' => "Shawon is based in **Dhaka, Bangladesh** 🇧🇩 but works with clients globally via remote work."],
                ['keywords' => ['education', 'study', 'university', 'degree'], 'response' => "Shawon holds a **Bachelor of Science in Computer Science and Engineering (CSE)**. 🎓"],
                ['keywords' => ['service', 'offer', 'do'], 'response' => "Shawon offers:\n✅ Custom Web App Development\n✅ API Development & Integration\n✅ E-commerce Solutions\n✅ Bug Fixing & Performance Optimization"],
            ];

            foreach ($rules as $rule) {
                foreach ($rule['keywords'] as $keyword) {
                    if (str_contains(strtolower($input), $keyword)) {
                        return $rule['response'];
                    }
                }
            }
            return "I'm currently updating my AI models to serve you better. Please try asking about 'Skills', 'Projects', or 'Contact' in the meantime! 🚀";
        };

        // 1. If No API Key or API is invalid, use Local Response immediately
        if (!$apiKey) {
            return response()->json(['reply' => $getLocalResponse($message)]);
        }

        // 2. Try Gemini API
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key={$apiKey}", [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $context]
                        ]
                    ]
                ]
            ]);

            // Log status code
            \Illuminate\Support\Facades\Log::info('Gemini API Status Code: ' . $response->status());

            if ($response->successful()) {
                $data = $response->json();
                $reply = $data['candidates'][0]['content']['parts'][0]['text'] ?? $getLocalResponse($message);
                return response()->json(['reply' => $reply]);
            } else {
                // If Rate Limited (429) or Error (404/500) -> Use Fallback
                \Illuminate\Support\Facades\Log::warning('Gemini Failed. Using Fallback. Status: ' . $response->status());
                return response()->json(['reply' => $getLocalResponse($message)]);
            }

        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Gemini Exception. Using Fallback. Error: ' . $e->getMessage());
            return response()->json(['reply' => $getLocalResponse($message)]);
        }
    }
}
