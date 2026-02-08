# Shawon - Professional Portfolio 🚀

A modern, high-performance portfolio website built with **Laravel 11**, **Tailwind CSS**, and **Alpine.js**. Designed for speed, responsiveness, and a seamless dark mode experience.

## ✨ Key Features

- **Modern Tech Stack:** Built on the latest Laravel framework with Vite for lightning-fast assets.
- **Robust Dark Mode:** Default dark mode with persistent user preference storage (localStorage) and zero-flicker loading.
- **Dynamic Content:** Projects and Skills are managed via a lightweight database/json structure.
- **Contact Form:** Secure contact form with email notifications (SMTP) and spam protection (Honeypot).
- **Responsive Design:** Fully responsive layout optimized for mobile, tablet, and desktop devices.
- **Vercel Optimized:** Configured for serverless deployment on Vercel with read-only filesystem handling.

## 🛠️ Technology Stack

- **Backend:** PHP 8.2+, Laravel 11
- **Frontend:** Blade Templates, Alpine.js
- **Styling:** Tailwind CSS (v3/v4 via Vite)
- **Database:** SQLite (Optimized for excessive reads)
- **Deployment:** Vercel (Serverless Functions)

## 🚀 Getting Started

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/my-portfolio.git
   cd my-portfolio
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup:**
   Copy the example env file and configure your environment variables:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Setup:**
   Create an empty `database/database.sqlite` file and run migrations:
   ```bash
   touch database/database.sqlite
   php artisan migrate:fresh --seed
   ```

5. **Build Assets & Run:**
   ```bash
   npm run build
   php artisan serve
   ```

## 🌐 Deployment on Vercel

This project is optimized for Vercel.

1. Import the repository in Vercel.
2. Add Environment Variables in Project Settings:
   - `APP_KEY`: (From your .env)
   - `APP_ENV`: `production`
   - `APP_DEBUG`: `false`
   - `DB_CONNECTION`: `sqlite`
   - `MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD` (For contact form)
3. Deploy!

> **Note:** The `vercel.json` and `AppServiceProvider` are configured to handle serverless constraints (read-only filesystem) by forcing array/cookie drivers for cache/sessions.

## 📞 Contact

**Shawon Howlader**  
Software Engineer  
Email: [shawonhawlader1044@gmail.com](mailto:shawonhawlader1044@gmail.com)  

---

Running on **Laravel** | Deployed with ❤️ on **Vercel**
