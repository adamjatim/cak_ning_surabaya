<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Paguyuban Cak & Ning Surabaya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/css/batik-patterns.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg border-r flex flex-col" style="background: var(--batik-kawung-event);">
            <div class="p-6 border-b">
                <span class="text-xl font-bold text-indigo-700">Cak & Ning Admin</span>
            </div>
            <nav class="flex-1 p-4 space-y-2">
                <a
                {{-- href="{{ route('admin.dashboard') }}" --}}
                class="block px-4 py-2 rounded hover:bg-indigo-50 text-indigo-700 font-medium">Dashboard</a>
                <a
                {{-- href="{{ route('admin.users.index') }}" --}}
                class="block px-4 py-2 rounded hover:bg-indigo-50 text-indigo-700">Users</a>
                <a
                {{-- href="{{ route('admin.posts.index') }}" --}}
                class="block px-4 py-2 rounded hover:bg-indigo-50 text-indigo-700">Posts</a>
                <a
                {{-- href="{{ route('admin.faqs.index') }}" --}}
                class="block px-4 py-2 rounded hover:bg-indigo-50 text-indigo-700">FAQs</a>
                <a
                {{-- href="{{ route('admin.chatlogs.index') }}" --}}
                class="block px-4 py-2 rounded hover:bg-indigo-50 text-indigo-700">Chat Logs</a>
            </nav>
            <div class="p-4 border-t">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Logout</button>
                </form>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 p-8">
            <header class="mb-6 flex items-center justify-between">
                <h1 class="text-2xl font-bold text-indigo-800">Admin Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Hello, {{-- {{ Auth::user()->name }} --}}</span>
                    <span class="px-2 py-1 bg-indigo-100 text-indigo-700 rounded text-sm">
                        {{-- {{ Auth::user()->role->name }} --}}
                    </span>
                </div>
            </header>
            <section>
                @yield('content')
            </section>
        </main>
    </div>
</body>
</html>
