<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-layouts.header />
<body class="bg-gray-100 min-h-screen flex flex-col">
<header class="bg-white border-t-4 border-blue-600 shadow mb-5">
    <nav class="container max-w-7xl mx-auto px-5 lg:px-40 py-5 flex justify-between">
        <ul class="flex space-x-5">
            <li class="font-bold mr-5 text-blue-600">Your Blog</li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Archiv</a></li>
            <li><a href="#">Newsletter</a></li>
            <li><a href="#">Impressum</a></li>
        </ul>
        <ul>
            <li><a href="#">Login</a></li>
        </ul>
    </nav>
</header>

<main class="flex flex-1 container max-w-7xl mx-auto px-5 lg:px-40 space-x-5 mb-5">
   {{ $slot }}
    <div class="space-y-5" style="width:300px;">

        <div class="bg-blue-700 shadow rounded-sm">
            <h2 class="text-white text-2xl p-5">Newsletter</h2>
            <div class="border-t border-blue-600 text-white p-5 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum laboriosam omnis repudiandae unde.
                <div class="flex mt-5">
                    <input type="text" name="newsletter" class="rounded-l-sm text-gray-800 px-4 py-2 h-12" placeholder="E-Mail Adresse" style="min-width: 0px;">
                    <button type="button" class="bg-blue-800 h-12 text-xs px-4 py-2 rounded-r-sm">abonnieren</button>
                </div>
            </div>
        </div>

        <x-post.newest />
        <x-post.categories />
        <x-post.trending />

    </div>
</main>
<x-layouts.footer />
</body>
</html>
