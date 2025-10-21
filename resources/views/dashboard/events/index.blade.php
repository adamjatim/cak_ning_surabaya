@extends('dashboard.layouts')

@section('title', 'Dashboard Event')
@section('dashboard-title', 'Dashboard Event')
@section('breadcrumb', 'Event Management')

@section('content')
    <!-- Event Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Total Events</p>
                    <p class="text-3xl font-bold text-olive-800">24</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">↗ +3</span> bulan ini
                    </p>
                </div>
                <div class="bg-pumpkin-100 rounded-lg p-3">
                    <span class="iconify text-pumpkin-600" data-icon="mdi:calendar-star" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Event Aktif</p>
                    <p class="text-3xl font-bold text-olive-800">8</p>
                    <p class="text-xs text-olive-500 mt-1">Sedang berjalan</p>
                </div>
                <div class="bg-green-100 rounded-lg p-3">
                    <span class="iconify text-green-600" data-icon="mdi:calendar-check" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Upcoming Events</p>
                    <p class="text-3xl font-bold text-olive-800">12</p>
                    <p class="text-xs text-olive-500 mt-1">Dalam 30 hari</p>
                </div>
                <div class="bg-blue-100 rounded-lg p-3">
                    <span class="iconify text-blue-600" data-icon="mdi:calendar-clock" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Total Revenue</p>
                    <p class="text-3xl font-bold text-olive-800">128M</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">↗ +15%</span> vs last month
                    </p>
                </div>
                <div class="bg-yellow-100 rounded-lg p-3">
                    <span class="iconify text-yellow-600" data-icon="mdi:cash-multiple" data-width="32"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Upcoming Events -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Quick Actions -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6 mb-6">
                <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                    <span class="iconify mr-2" data-icon="mdi:lightning-bolt" data-width="20"></span>
                    Quick Actions
                </h3>
                <div class="space-y-3">
                    <a {{-- href="{{ route('admin.events.create') }}" --}}
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-pumpkin-600" data-icon="mdi:calendar-plus" data-width="20"></span>
                            <span class="font-medium text-olive-800">Buat Event Baru</span>
                        </div>
                    </a>
                    <a {{-- href="{{ route('admin.events.index') }}?status=draft" --}}
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-yellow-600" data-icon="mdi:calendar-edit" data-width="20"></span>
                            <span class="font-medium text-olive-800">Kelola Draft Event</span>
                        </div>
                    </a>
                    <a {{-- href="{{ route('admin.venues.index') }}" --}}
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-blue-600" data-icon="mdi:map-marker" data-width="20"></span>
                            <span class="font-medium text-olive-800">Kelola Venue</span>
                        </div>
                    </a>
                    <a {{-- href="{{ route('admin.bookings.index') }}" --}}
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-green-600" data-icon="mdi:calendar-account" data-width="20"></span>
                            <span class="font-medium text-olive-800">Lihat Booking</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Event Categories -->
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
                <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                    <span class="iconify mr-2" data-icon="mdi:shape" data-width="20"></span>
                    Event Categories
                </h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-olive-700 font-medium">Wedding</span>
                        <span class="px-2 py-1 bg-pumpkin-100 text-pumpkin-700 rounded text-sm font-medium">8</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-olive-700 font-medium">Corporate</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-sm font-medium">6</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-olive-700 font-medium">Festival</span>
                        <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-sm font-medium">4</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-olive-700 font-medium">Private</span>
                        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded text-sm font-medium">6</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Events -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-olive-800 flex items-center">
                        <span class="iconify mr-2" data-icon="mdi:calendar-clock" data-width="20"></span>
                        Upcoming Events
                    </h3>
                    <a {{-- href="{{ route('admin.events.index') }}" --}}
                       class="text-sm text-olive-600 hover:text-olive-800 font-medium flex items-center">
                        Lihat semua
                        <span class="iconify ml-1" data-icon="mdi:arrow-right" data-width="16"></span>
                    </a>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="bg-pumpkin-100 rounded-lg p-3 flex-shrink-0">
                            <span class="iconify text-pumpkin-600" data-icon="mdi:heart" data-width="24"></span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Wedding Celebration - Sarah & Doni</h4>
                            <p class="text-sm text-olive-600 mt-1">Grand Ballroom, Hotel Majapahit</p>
                            <div class="flex items-center mt-2 space-x-4">
                                <span class="text-sm text-olive-700 font-medium flex items-center">
                                    <span class="iconify mr-1" data-icon="mdi:calendar" data-width="16"></span>
                                    15 Des 2025, 19:00
                                </span>
                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">Confirmed</span>
                                <span class="text-xs text-olive-500">Fee: Rp 15.000.000</span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button {{-- onclick="editEvent(1)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:pencil" data-width="16"></span>
                            </button>
                            <button {{-- onclick="viewDetails(1)" --}} class="text-green-600 hover:text-green-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="16"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="bg-blue-100 rounded-lg p-3 flex-shrink-0">
                            <span class="iconify text-blue-600" data-icon="mdi:office-building" data-width="24"></span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Company Annual Meeting PT. Wijaya</h4>
                            <p class="text-sm text-olive-600 mt-1">Shangri-La Hotel, Surabaya</p>
                            <div class="flex items-center mt-2 space-x-4">
                                <span class="text-sm text-olive-700 font-medium flex items-center">
                                    <span class="iconify mr-1" data-icon="mdi:calendar" data-width="16"></span>
                                    22 Des 2025, 09:00
                                </span>
                                <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-medium">Pending</span>
                                <span class="text-xs text-olive-500">Fee: Rp 8.500.000</span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button {{-- onclick="editEvent(2)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:pencil" data-width="16"></span>
                            </button>
                            <button {{-- onclick="viewDetails(2)" --}} class="text-green-600 hover:text-green-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="16"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="bg-green-100 rounded-lg p-3 flex-shrink-0">
                            <span class="iconify text-green-600" data-icon="mdi:music" data-width="24"></span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Festival Cak & Ning 2025</h4>
                            <p class="text-sm text-olive-600 mt-1">Gedung Negara Grahadi, Surabaya</p>
                            <div class="flex items-center mt-2 space-x-4">
                                <span class="text-sm text-olive-700 font-medium flex items-center">
                                    <span class="iconify mr-1" data-icon="mdi:calendar" data-width="16"></span>
                                    31 Des 2025, 19:00
                                </span>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs font-medium">Planning</span>
                                <span class="text-xs text-olive-500">Internal Event</span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button {{-- onclick="editEvent(3)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:pencil" data-width="16"></span>
                            </button>
                            <button {{-- onclick="viewDetails(3)" --}} class="text-green-600 hover:text-green-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="16"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                <span class="iconify mr-2" data-icon="mdi:chart-line" data-width="20"></span>
                Monthly Events
            </h3>
            <div class="h-64 flex items-center justify-center text-olive-500">
                <div class="text-center">
                    <span class="iconify" data-icon="mdi:chart-bar" data-width="64"></span>
                    <p class="mt-2">Chart events bulanan akan ditampilkan di sini</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                <span class="iconify mr-2" data-icon="mdi:chart-pie" data-width="20"></span>
                Revenue by Category
            </h3>
            <div class="h-64 flex items-center justify-center text-olive-500">
                <div class="text-center">
                    <span class="iconify" data-icon="mdi:chart-pie" data-width="64"></span>
                    <p class="mt-2">Chart revenue per kategori akan ditampilkan di sini</p>
                </div>
            </div>
        </div>
    </div>
@endsection
