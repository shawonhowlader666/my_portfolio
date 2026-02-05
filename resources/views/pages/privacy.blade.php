<x-layout title="Privacy Policy - Shawon" description="Privacy Policy outlining how we collect and use your data.">
    <div class="pt-32 pb-20 bg-gray-50 dark:bg-[#050B14] min-h-screen transition-colors duration-300">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold mb-8 text-gray-900 dark:text-white">Privacy Policy</h1>
            
            <div class="prose dark:prose-invert max-w-none space-y-6 text-gray-600 dark:text-gray-400">
                <p>Last updated: {{ date('F d, Y') }}</p>

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mt-8">1. Information Collection</h2>
                <p>I collect information from you when you fill out a form on my site. When ordering or registering on my site, as appropriate, you may be asked to enter your: name, e-mail address, phone number or mailing address.</p>

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mt-8">2. Use of Information</h2>
                <p>Any of the information I collect from you may be used in one of the following ways:</p>
                <ul class="list-disc pl-6 space-y-2">
                    <li>To personalize your experience</li>
                    <li>To improve my website</li>
                    <li>To improve customer service</li>
                    <li>To send periodic emails regarding your project inquiries</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mt-8">3. Information Protection</h2>
                <p>I implement a variety of security measures to maintain the safety of your personal information when you enter, submit, or access your personal information.</p>

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mt-8">4. Contact Me</h2>
                <p>If there are any questions regarding this privacy policy, you may contact me using the information below or via the contact form on the homepage.</p>
                
                <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-800">
                    <a href="{{ route('home') }}" class="text-cyan-600 dark:text-cyan-400 hover:underline">← Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
