<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieHub | Static Laravel Demo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

    <nav class="p-6 bg-gray-800 flex justify-between items-center shadow-xl">
        <h1 class="text-2xl font-bold text-red-600 tracking-tighter">MOVIE<span class="text-white">HUB</span></h1>
        <ul class="hidden md:flex space-x-6 text-sm uppercase tracking-wide">
            <li class="hover:text-red-500 cursor-pointer">Home</li>
            <li class="hover:text-red-500 cursor-pointer">Movies</li>
            <li class="hover:text-red-500 cursor-pointer">Series</li>
        </ul>
        <button class="bg-red-600 px-4 py-2 rounded text-sm font-bold hover:bg-red-700 transition">LOGIN</button>
    </nav>

    <header class="relative h-[60vh] flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1626814026160-2237a95fc5a0?q=80&w=2070&auto=format&fit=crop');">
        <div class="text-center px-4">
            <h2 class="text-4xl md:text-6xl font-extrabold mb-4">Unlimited Movies & TV Shows</h2>
            <p class="text-lg md:text-xl text-gray-300 mb-8">Watch anywhere. Cancel anytime.</p>
            <a href="#" class="bg-red-600 px-8 py-3 rounded-full text-lg font-bold hover:scale-105 transition-transform inline-block">Get Started</a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <h3 class="text-2xl font-semibold mb-8 border-l-4 border-red-600 pl-4">Trending Now</h3>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?q=80&w=1025&auto=format&fit=crop" alt="Movie" class="w-full h-96 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                        <span class="border-2 border-white p-2 rounded-full">▶ Play Now</span>
                    </div>
                </div>
                <h4 class="mt-4 font-bold text-lg">Neon Nights</h4>
                <p class="text-gray-400 text-sm">2024 • Sci-Fi • 2h 15m</p>
            </div>

            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1485846234645-a62644f84728?q=80&w=1159&auto=format&fit=crop" alt="Movie" class="w-full h-96 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                        <span class="border-2 border-white p-2 rounded-full">▶ Play Now</span>
                    </div>
                </div>
                <h4 class="mt-4 font-bold text-lg">The Silent Director</h4>
                <p class="text-gray-400 text-sm">2023 • Drama • 1h 45m</p>
            </div>

            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1440404653325-ab127d49abc1?q=80&w=1170&auto=format&fit=crop" alt="Movie" class="w-full h-96 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                        <span class="border-2 border-white p-2 rounded-full">▶ Play Now</span>
                    </div>
                </div>
                <h4 class="mt-4 font-bold text-lg">Classic Reels</h4>
                <p class="text-gray-400 text-sm">2022 • History • 2h 05m</p>
            </div>

            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1542204172-3c1f81d89ad5?q=80&w=1035&auto=format&fit=crop" alt="Movie" class="w-full h-96 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                        <span class="border-2 border-white p-2 rounded-full">▶ Play Now</span>
                    </div>
                </div>
                <h4 class="mt-4 font-bold text-lg">Urban Legends</h4>
                <p class="text-gray-400 text-sm">2024 • Action • 1h 58m</p>
            </div>

        </div>
    </main>

    <footer class="mt-20 py-10 bg-gray-800 text-center text-gray-500 text-sm">
        <p>&copy; 2026 MovieHub. Built with Laravel and Tailwind.</p>
    </footer>

</body>
</html>