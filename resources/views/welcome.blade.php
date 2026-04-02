<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-800">MyDashboard</h1>

            <div>
                @if (Route::has('login'))
                    @auth
                        <a href="/home" class="text-blue-500 font-semibold">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 mr-4 hover:text-blue-500">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="flex items-center justify-center h-[80vh]">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                Selamat Datang di Dashboard
            </h2>
            <p class="text-gray-600 mb-6">
                Website sederhana menggunakan Laravel
            </p>

            @guest
                <a href="{{ route('login') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg mr-3 hover:bg-blue-600">
                    Login
                </a>
                <a href="{{ route('register') }}" class="bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-900">
                    Register
                </a>
            @endguest

            @auth
                <a href="/home" class="bg-red-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600">
                    Masuk ke Dashboard Coek
                </a>
            @endauth
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-center py-4 shadow-inner">
        <p class="text-gray-500 text-sm">
            © {{ date('Y') }} MyDashboard. All rights reserved.
        </p>
    </footer>

</body>
</html>