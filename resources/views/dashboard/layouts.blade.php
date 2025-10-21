<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Dashboard') - Paguyuban Cak & Ning Surabaya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>
    @vite(['resources/css/app.css', 'resources/css/batik-patterns.css', 'resources/js/app.js'])
    @yield('styles')
</head>
<body class="bg-merino-50 min-h-screen font-sans">
    <div class="drawer lg:drawer-open">
        <input id="dashboard-drawer" type="checkbox" class="drawer-toggle" />

        <!-- Page content wrapper -->
        <div class="drawer-content flex flex-col">
            <!-- Top Navbar -->
            <div class="navbar bg-white shadow-sm border-b border-olive-200 px-4 lg:px-6">
                <!-- Mobile menu button -->
                <div class="flex-none lg:hidden">
                    <label for="dashboard-drawer" class="btn btn-square btn-ghost text-olive-700">
                        <span class="iconify" data-icon="mdi:menu" data-width="24"></span>
                    </label>
                </div>

                <!-- Dashboard Title & Breadcrumb -->
                <div class="flex-1">
                    <div class="flex items-center space-x-2">
                        <div class="dropdown">
                            <label tabindex="0" class="btn btn-ghost text-olive-800 font-semibold flex items-center">
                                <span class="iconify mr-2" data-icon="mdi:view-dashboard" data-width="20"></span>
                                @yield('dashboard-title', 'Dashboard Utama')
                                <span class="iconify ml-1" data-icon="mdi:chevron-down" data-width="16"></span>
                            </label>
                            <ul tabindex="0" class="dropdown-content menu p-2 shadow-lg bg-white rounded-box w-64 border border-olive-200 mt-2">
                                <li class="menu-title text-olive-600 font-medium">
                                    <span>Dashboard Management</span>
                                </li>
                                <li><a {{-- href="{{ route('admin.dashboard') }}" --}} class="text-olive-700 hover:bg-olive-50">
                                    <span class="iconify" data-icon="mdi:view-dashboard" data-width="18"></span>
                                    Dashboard Utama
                                </a></li>
                                <li><a {{-- href="{{ route('admin.blog.dashboard') }}" --}} class="text-olive-700 hover:bg-olive-50">
                                    <span class="iconify" data-icon="mdi:post" data-width="18"></span>
                                    Dashboard Blog
                                </a></li>
                                <li><a {{-- href="{{ route('admin.events.dashboard') }}" --}} class="text-olive-700 hover:bg-olive-50">
                                    <span class="iconify" data-icon="mdi:calendar-star" data-width="18"></span>
                                    Dashboard Event
                                </a></li>
                                <li><a {{-- href="{{ route('admin.talents.dashboard') }}" --}} class="text-olive-700 hover:bg-olive-50">
                                    <span class="iconify" data-icon="mdi:account-star" data-width="18"></span>
                                    Dashboard Talent
                                </a></li>
                                <li><a {{-- href="{{ route('admin.assignments.dashboard') }}" --}} class="text-olive-700 hover:bg-olive-50">
                                    <span class="iconify" data-icon="mdi:assignment" data-width="18"></span>
                                    Dashboard Penugasan
                                </a></li>
                                <li><a {{-- href="{{ route('admin.payroll.dashboard') }}" --}} class="text-olive-700 hover:bg-olive-50">
                                    <span class="iconify" data-icon="mdi:cash-multiple" data-width="18"></span>
                                    Dashboard Penggajian
                                </a></li>
                            </ul>
                        </div>

                        <!-- Breadcrumb -->
                        <div class="hidden md:flex items-center text-sm text-olive-600">
                            <span class="iconify" data-icon="mdi:chevron-right" data-width="16"></span>
                            <span class="ml-1">@yield('breadcrumb', 'Home')</span>
                        </div>
                    </div>
                </div>

                <!-- User Menu -->
                <div class="flex-none">
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar placeholder">
                            <div class="bg-olive-200 text-olive-800 rounded-full w-10">
                                <span class="text-lg font-medium">
                                    {{-- {{ substr(Auth::user()->name, 0, 1) }} --}}A
                                </span>
                            </div>
                        </label>
                        <ul tabindex="0" class="dropdown-content menu p-2 shadow-lg bg-white rounded-box w-52 border border-olive-200 mt-2">
                            <li class="menu-title">
                                <span class="text-olive-800 font-medium">
                                    {{-- {{ Auth::user()->name }} --}}Admin User
                                </span>
                                <span class="text-xs text-olive-600 -mt-1">
                                    {{-- {{ Auth::user()->role->name }} --}}Administrator
                                </span>
                            </li>
                            <div class="divider my-1"></div>
                            <li><a {{-- href="{{ route('admin.profile') }}" --}} class="text-olive-700">
                                <span class="iconify" data-icon="mdi:account" data-width="18"></span>
                                Profil Saya
                            </a></li>
                            <li><a {{-- href="{{ route('admin.settings') }}" --}} class="text-olive-700">
                                <span class="iconify" data-icon="mdi:cog" data-width="18"></span>
                                Pengaturan
                            </a></li>
                            <div class="divider my-1"></div>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" class="w-full">
                                    @csrf
                                    <button type="submit" class="w-full text-left text-red-600 hover:bg-red-50">
                                        <span class="iconify" data-icon="mdi:logout" data-width="18"></span>
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <main class="flex-1 p-4 lg:p-6">
                @yield('content')
            </main>
        </div>

        <!-- Sidebar -->
        <div class="drawer-side">
            <label for="dashboard-drawer" class="drawer-overlay"></label>
            <aside class="min-h-full w-64 bg-white border-r border-olive-200 flex flex-col" style="background: linear-gradient(135deg, rgba(245, 158, 11, 0.02) 0%, rgba(245, 158, 11, 0.05) 100%), var(--batik-kawung-pattern, none);">
                <!-- Sidebar Header -->
                <div class="p-4 border-b border-olive-200 bg-olive-50">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('images/logo/logo-cak-ning.png') }}" alt="Logo" class="w-10 h-10 rounded-lg">
                        <div>
                            <h2 class="text-lg font-bold text-olive-800">Cak & Ning</h2>
                            <p class="text-xs text-olive-600">Admin Panel</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Menu -->
                <nav class="flex-1 p-4 space-y-1 overflow-y-auto">
                    <!-- Dashboard Section -->
                    <div class="mb-4">
                        <h3 class="text-xs font-semibold text-olive-600 uppercase tracking-wide mb-2 px-2">Dashboard</h3>
                        <a href="{{ route('dashboard') }}"
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors @if(request()->routeIs('dashboard')) bg-olive-100 font-medium @endif">
                            <span class="iconify mr-3" data-icon="mdi:view-dashboard" data-width="20"></span>
                            Dashboard Utama
                        </a>
                    </div>

                    <!-- Content Management -->
                    <div class="mb-4">
                        <h3 class="text-xs font-semibold text-olive-600 uppercase tracking-wide mb-2 px-2">Content Management</h3>
                        <a href="{{ route('admin.blog.index') }}"
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors @if(request()->routeIs('admin.blog.*')) bg-olive-100 font-medium @endif">
                            <span class="iconify mr-3" data-icon="mdi:post" data-width="20"></span>
                            Blog & Posts
                        </a>
                        <a href="{{ route('admin.events.index') }}"
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors @if(request()->routeIs('admin.events.*')) bg-olive-100 font-medium @endif">
                            <span class="iconify mr-3" data-icon="mdi:calendar-star" data-width="20"></span>
                            Events
                        </a>
                        <a {{-- href="{{ route('admin.galleries.index') }}" --}}
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors">
                            <span class="iconify mr-3" data-icon="mdi:image-multiple" data-width="20"></span>
                            Gallery
                        </a>
                        <a {{-- href="{{ route('admin.faqs.index') }}" --}}
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors">
                            <span class="iconify mr-3" data-icon="mdi:help-circle" data-width="20"></span>
                            FAQs
                        </a>
                    </div>

                    <!-- User Management -->
                    <div class="mb-4">
                        <h3 class="text-xs font-semibold text-olive-600 uppercase tracking-wide mb-2 px-2">User Management</h3>
                        <a {{-- href="{{ route('admin.users.index') }}" --}}
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors">
                            <span class="iconify mr-3" data-icon="mdi:account-group" data-width="20"></span>
                            Users
                        </a>
                        <a href="{{ route('admin.talents.index') }}"
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors @if(request()->routeIs('admin.talents.*')) bg-olive-100 font-medium @endif">
                            <span class="iconify mr-3" data-icon="mdi:account-star" data-width="20"></span>
                            Talents
                        </a>
                        <a {{-- href="{{ route('admin.roles.index') }}" --}}
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors">
                            <span class="iconify mr-3" data-icon="mdi:shield-account" data-width="20"></span>
                            Roles & Permissions
                        </a>
                    </div>

                    <!-- Assignment & Payroll -->
                    <div class="mb-4">
                        <h3 class="text-xs font-semibold text-olive-600 uppercase tracking-wide mb-2 px-2">Operations</h3>
                        <a href="{{ route('admin.assignments.index') }}"
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors @if(request()->routeIs('admin.assignments.*')) bg-olive-100 font-medium @endif">
                            <span class="iconify mr-3" data-icon="mdi:assignment" data-width="20"></span>
                            Assignments
                        </a>
                        <a href="{{ route('admin.payroll.index') }}"
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors @if(request()->routeIs('admin.payroll.*')) bg-olive-100 font-medium @endif">
                            <span class="iconify mr-3" data-icon="mdi:cash-multiple" data-width="20"></span>
                            Payroll
                        </a>
                        <a {{-- href="{{ route('admin.reports.index') }}" --}}
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors">
                            <span class="iconify mr-3" data-icon="mdi:chart-bar" data-width="20"></span>
                            Reports
                        </a>
                    </div>

                    <!-- System -->
                    <div class="mb-4">
                        <h3 class="text-xs font-semibold text-olive-600 uppercase tracking-wide mb-2 px-2">System</h3>
                        <a {{-- href="{{ route('admin.chatlogs.index') }}" --}}
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors">
                            <span class="iconify mr-3" data-icon="mdi:message-text" data-width="20"></span>
                            Chat Logs
                        </a>
                        <a {{-- href="{{ route('admin.settings.index') }}" --}}
                           class="flex items-center px-3 py-2 rounded-lg hover:bg-olive-100 text-olive-700 transition-colors">
                            <span class="iconify mr-3" data-icon="mdi:cog" data-width="20"></span>
                            Settings
                        </a>
                    </div>
                </nav>

                <!-- Sidebar Footer -->
                <div class="p-4 border-t border-olive-200 bg-olive-50">
                    <div class="text-center">
                        <p class="text-xs text-olive-600">© 2025 Paguyuban Cak & Ning</p>
                        <p class="text-xs text-olive-500">Surabaya</p>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    @yield('scripts')
</body>
</html>
