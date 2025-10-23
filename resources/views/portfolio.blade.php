<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confidence Nsirim | Software Developer</title>
    <!-- ✅ Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-500 text-gray-800 font-sans">

    <!-- Navbar -->
    <header class="flex justify-between items-center px-8 py-6 bg-white shadow-sm fixed top-0 left-0 w-full z-50">
        <h1 class="text-2xl font-bold text-indigo-600">Confidence Nsirim</h1>
        <nav class="space-x-6 text-gray-700">
            <a href="#about" class="hover:text-indigo-600">About</a>
            <a href="#projects" class="hover:text-indigo-600">Projects</a>
            <a href="#skills" class="hover:text-indigo-600">Skills</a>
            <a href="#contact" class="hover:text-indigo-600">Contact</a>
        </nav>
    </header>

    <!-- Hero -->
    <section class="pt-32 pb-20 text-center bg-gradient-to-r from-indigo-600 to-blue-500 text-white">
        <h2 class="text-4xl font-bold mb-4">Hi, I’m Confidence — Full-Stack Developer</h2>
        <p class="max-w-2xl mx-auto text-lg mb-6">
            I build web applications with Laravel, Node.js, and Next.js — integrating secure payments, APIs, and scalable backend systems.
        </p>
        <a href="#projects" class="bg-white text-indigo-600 px-6 py-3 rounded-full font-medium shadow hover:bg-gray-100 transition">
            View My Work
        </a>
    </section>

    <!-- About -->
    <section id="about" class="py-16 px-8 max-w-5xl mx-auto">
        <h3 class="text-3xl font-bold mb-4 text-indigo-600">About Me</h3>
        <p class="text-lg leading-relaxed">
            I’m a passionate software developer with experience in backend, frontend, and API integrations.
            I’ve built end-to-end applications such as banking systems, real estate platforms, and car rental services using
            Laravel, Node.js, and React/Next.js. My focus is on clean code, scalability, and seamless user experience.
        </p>
    </section>

    <!-- Projects -->
    <section id="projects" class="py-16 px-8 bg-gray-100">
        <h3 class="text-3xl font-bold mb-10 text-indigo-600 text-center">Featured Projects</h3>
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Project 1 -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                <div class="h-48 bg-indigo-100 flex items-center justify-center text-indigo-500 text-xl font-semibold">
                    Utility App
                </div>
                <div class="p-6">
                    <h4 class="font-bold text-xl mb-2">Utility App</h4>
                    <p class="text-gray-600 mb-4">A secure Laravel-based app with wallet, Flutterwave & VTpass API integrations for deposits and airtime/data purchases.</p>
                    <a href="#" class="text-indigo-600 hover:underline">View Project →</a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class=
               "bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                <div class="h-48 bg-blue-100 flex items-center justify-center text-blue-500 text-xl font-semibold">
                    Real Estate Platform
                </div>
                <div class="p-6">
                    <h4 class="font-bold text-xl mb-2">Real Estate Platform</h4>
                    <p class="text-gray-600 mb-4">A full-stack real estate listing platform built with Laravel and React, featuring property search, user authentication, and admin management.</p>
                    <a href="#" class="text-indigo-600 hover:underline">View Project →</a>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                <div class="h-48 bg-green-100 flex items-center justify-center text-green-500 text-xl font-semibold">
                    Car Rental System
                </div>
                <div class="p-6">
                    <h4 class="font-bold text-xl mb-2">Car Rental System</h4>
                    <p class="text-gray-600 mb-4">A Laravel and Vue.js car rental application with booking, payment integration, and admin dashboard for managing vehicles and reservations.</p>
                    <a href="#" class="text-indigo-600 hover:underline">View Project →</a>
                </div>
            </div>
            <!-- Project 4 -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                <div class="h-48 bg-purple-100 flex items-center justify-center text-purple-500 text-xl font-semibold">
                    QUICKBuy E-commerce
                </div>
                <div class="p-6">
                    <h4 class="font-bold text-xl mb-2">QUICKBuy E-commerce</h4>
                    <p class="text-gray-600 mb-4">An innovative e-commerce platform built with Express and Next.js, featuring real-time order tracking, user reviews, contact form, robust authentication, payment system, and a seamless checkout process.</p>
                    <a href="https://my-ecommerce-frontend.onrender.com/" class="text-indigo-600 hover:underline">View Project →</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Skills -->

    <section id="skills" class="py-16 px-8">
        <h3 class="text-3xl font-bold mb-10 text-indigo-600 text-center">Technical Skills</h3>
        <div class="max-w-4xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl mb-2">💻</div>
                <h4 class="font-semibold">Laravel</h4>
            </div>
            <div>
                <div class="text-4xl mb-2">⚛️</div>
                <h4 class="font-semibold">React/Next.js</h4>
            </div>
            <div>
                <div class="text-4xl mb-2">🟢</div>
                <h4 class="font-semibold">Node.js</h4>
            </div>
            <div>
                <div class="text-4xl mb-2">☁️</div>
                <h4 class="font-semibold">API Integration</h4>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section id="contact" class="py-16 px-8 bg-gray-100 text-center">
        <h3 class="text-3xl font-bold mb-4 text-indigo-600">Get In Touch</h3>
        <p class="mb-6">I’m open to new opportunities and collaborations. Feel free to reach out!</p>
        <a href="mailto:your-email@example.com" class="text-indigo-600 hover:underline">Email Me →</a>
    </section>
    <!-- Footer -->
    <footer class="py-6 bg-white text-center text-gray-600">
        &copy; 2024 Confidence Nsirim. All rights reserved.
    </footer>
</body>
</html>
