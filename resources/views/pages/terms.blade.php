<x-layout title="Terms of Service - Shawon" description="Terms of Service for using Shawon's portfolio and services.">
    <div class="pt-32 pb-20 bg-gray-50 dark:bg-[#050B14] min-h-screen transition-colors duration-300">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold mb-8 text-gray-900 dark:text-white">Terms of Service</h1>
            
            <div class="prose dark:prose-invert max-w-none space-y-6 text-gray-600 dark:text-gray-400">
                <p>Last updated: {{ date('F d, Y') }}</p>

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mt-8">1. Introduction</h2>
                <p>Welcome to my portfolio website. By accessing and using this website, you agree to comply with and be bound by these Terms of Service.</p>

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mt-8">2. Intellectual Property</h2>
                <p>All content published and made available on this site is the property of Shawon. This includes, but is not limited to images, text, logos, documents, downloadable files and anything that contributes to the composition of this site.</p>

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mt-8">3. Project Inquiries</h2>
                <p>When you submit a project inquiry through the contact form, you agree to provide accurate and current information. I reserve the right to refuse service to anyone for any reason at any time.</p>

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mt-8">4. Privacy</h2>
                <p>Your use of the website is also governed by our Privacy Policy. Please review our Privacy Policy, which also governs the Site and informs users of our data collection practices.</p>

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mt-8">5. Changes to Terms</h2>
                <p>I reserve the right, at my sole discretion, to change, modify, add or remove portions of these Terms of Service, at any time. It is your responsibility to check these Terms of Service periodically for changes.</p>
                
                <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-800">
                    <a href="{{ route('home') }}" class="text-cyan-600 dark:text-cyan-400 hover:underline">← Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
