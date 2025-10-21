@extends('dashboard.layouts')

@section('title', 'Dashboard Utama')
@section('dashboard-title', 'Dashboard Utama')
@section('breadcrumb', 'Overview')

@section('content')
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Anggota -->
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Total Anggota</p>
                    <p class="text-3xl font-bold text-olive-800">124</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">↗ +5</span> dari bulan lalu
                    </p>
                </div>
                <div class="bg-olive-100 rounded-lg p-3">
                    <span class="iconify text-olive-600" data-icon="mdi:account-group" data-width="32"></span>
                </div>
            </div>
        </div>

        <!-- Event Aktif -->
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Event Aktif</p>
                    <p class="text-3xl font-bold text-olive-800">8</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-blue-600">→ 3</span> minggu ini
                    </p>
                </div>
                <div class="bg-pumpkin-100 rounded-lg p-3">
                    <span class="iconify text-pumpkin-600" data-icon="mdi:calendar-star" data-width="32"></span>
                </div>
            </div>
        </div>

        <!-- Postingan Blog -->
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Postingan Blog</p>
                    <p class="text-3xl font-bold text-olive-800">32</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">↗ +8</span> bulan ini
                    </p>
                </div>
                <div class="bg-blue-100 rounded-lg p-3">
                    <span class="iconify text-blue-600" data-icon="mdi:post" data-width="32"></span>
                </div>
            </div>
        </div>

        <!-- Penugasan Aktif -->
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Penugasan Aktif</p>
                    <p class="text-3xl font-bold text-olive-800">12</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-yellow-600">→ 4</span> pending review
                    </p>
                </div>
                <div class="bg-yellow-100 rounded-lg p-3">
                    <span class="iconify text-yellow-600" data-icon="mdi:assignment" data-width="32"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Recent Activities -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Quick Actions -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
                <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                    <span class="iconify mr-2" data-icon="mdi:lightning-bolt" data-width="20"></span>
                    Quick Actions
                </h3>
                <div class="space-y-3">
                    <a {{-- href="{{ route('admin.posts.create') }}" --}}
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-blue-600" data-icon="mdi:plus-circle" data-width="20"></span>
                            <span class="font-medium text-olive-800">Buat Post Baru</span>
                        </div>
                    </a>
                    <a {{-- href="{{ route('admin.events.create') }}" --}}
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-pumpkin-600" data-icon="mdi:calendar-plus" data-width="20"></span>
                            <span class="font-medium text-olive-800">Tambah Event</span>
                        </div>
                    </a>
                    <a {{-- href="{{ route('admin.assignments.create') }}" --}}
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-yellow-600" data-icon="mdi:assignment-plus" data-width="20"></span>
                            <span class="font-medium text-olive-800">Buat Penugasan</span>
                        </div>
                    </a>
                    <a {{-- href="{{ route('admin.users.create') }}" --}}
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-green-600" data-icon="mdi:account-plus" data-width="20"></span>
                            <span class="font-medium text-olive-800">Tambah User</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
                <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                    <span class="iconify mr-2" data-icon="mdi:clock-outline" data-width="20"></span>
                    Aktivitas Terbaru
                </h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3 p-3 rounded-lg hover:bg-olive-50 transition-colors">
                        <div class="bg-blue-100 rounded-full p-2 flex-shrink-0">
                            <span class="iconify text-blue-600" data-icon="mdi:post" data-width="16"></span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-olive-800">Post baru dipublikasi</p>
                            <p class="text-sm text-olive-600">"Sejarah Paguyuban Cak & Ning" telah dipublikasi</p>
                            <p class="text-xs text-olive-500 mt-1">2 jam yang lalu</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3 p-3 rounded-lg hover:bg-olive-50 transition-colors">
                        <div class="bg-pumpkin-100 rounded-full p-2 flex-shrink-0">
                            <span class="iconify text-pumpkin-600" data-icon="mdi:calendar-plus" data-width="16"></span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-olive-800">Event baru ditambahkan</p>
                            <p class="text-sm text-olive-600">Festival Cak & Ning 2025 dijadwalkan</p>
                            <p class="text-xs text-olive-500 mt-1">5 jam yang lalu</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3 p-3 rounded-lg hover:bg-olive-50 transition-colors">
                        <div class="bg-green-100 rounded-full p-2 flex-shrink-0">
                            <span class="iconify text-green-600" data-icon="mdi:account-check" data-width="16"></span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-olive-800">User baru bergabung</p>
                            <p class="text-sm text-olive-600">3 anggota baru telah terdaftar</p>
                            <p class="text-xs text-olive-500 mt-1">1 hari yang lalu</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3 p-3 rounded-lg hover:bg-olive-50 transition-colors">
                        <div class="bg-yellow-100 rounded-full p-2 flex-shrink-0">
                            <span class="iconify text-yellow-600" data-icon="mdi:assignment-check" data-width="16"></span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-olive-800">Penugasan diselesaikan</p>
                            <p class="text-sm text-olive-600">MC Event Wedding Expo telah selesai</p>
                            <p class="text-xs text-olive-500 mt-1">2 hari yang lalu</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-4 border-t border-olive-200">
                    <a {{-- href="{{ route('admin.activities.index') }}" --}}
                       class="text-sm text-olive-600 hover:text-olive-800 font-medium flex items-center">
                        Lihat semua aktivitas
                        <span class="iconify ml-1" data-icon="mdi:arrow-right" data-width="16"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts & Analytics Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
        <!-- Event Chart -->
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                <span class="iconify mr-2" data-icon="mdi:chart-line" data-width="20"></span>
                Event Bulanan
            </h3>
            <div class="h-64 flex items-center justify-center text-olive-500">
                <!-- Placeholder for chart -->
                <div class="text-center">
                    <span class="iconify" data-icon="mdi:chart-bar" data-width="64"></span>
                    <p class="mt-2">Chart akan ditampilkan di sini</p>
                </div>
            </div>
        </div>

        <!-- Revenue Chart -->
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                <span class="iconify mr-2" data-icon="mdi:cash-multiple" data-width="20"></span>
                Pendapatan Bulanan
            </h3>
            <div class="h-64 flex items-center justify-center text-olive-500">
                <!-- Placeholder for chart -->
                <div class="text-center">
                    <span class="iconify" data-icon="mdi:chart-pie" data-width="64"></span>
                    <p class="mt-2">Chart akan ditampilkan di sini</p>
                </div>
            </div>
        </div>
    </div>
@endsection
