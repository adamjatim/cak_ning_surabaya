@extends('dashboard.layouts')

@section('title', 'Dashboard Penugasan')
@section('dashboard-title', 'Dashboard Penugasan')
@section('breadcrumb', 'Assignment Management')

@section('content')
    <!-- Assignment Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Total Assignments</p>
                    <p class="text-3xl font-bold text-olive-800">127</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">↗ +8</span> this week
                    </p>
                </div>
                <div class="bg-blue-100 rounded-lg p-3">
                    <span class="iconify text-blue-600" data-icon="mdi:clipboard-list" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Active Assignments</p>
                    <p class="text-3xl font-bold text-olive-800">24</p>
                    <p class="text-xs text-olive-500 mt-1">Sedang berlangsung</p>
                </div>
                <div class="bg-yellow-100 rounded-lg p-3">
                    <span class="iconify text-yellow-600" data-icon="mdi:clock-outline" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Completed</p>
                    <p class="text-3xl font-bold text-olive-800">89</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">Success rate: 94%</span>
                    </p>
                </div>
                <div class="bg-green-100 rounded-lg p-3">
                    <span class="iconify text-green-600" data-icon="mdi:check-circle" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">This Month Revenue</p>
                    <p class="text-3xl font-bold text-olive-800">245M</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">↗ +18%</span> vs last month
                    </p>
                </div>
                <div class="bg-purple-100 rounded-lg p-3">
                    <span class="iconify text-purple-600" data-icon="mdi:cash-multiple" data-width="32"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Current Assignments & Quick Actions -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Quick Actions -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6 mb-6">
                <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                    <span class="iconify mr-2" data-icon="mdi:lightning-bolt" data-width="20"></span>
                    Quick Actions
                </h3>
                <div class="space-y-3">
                    <a href="{{ route('admin.assignments.create') }}"
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-blue-600" data-icon="mdi:clipboard-plus" data-width="20"></span>
                            <span class="font-medium text-olive-800">Tambah Penugasan</span>
                        </div>
                    </a>
                    <a href="{{ route('admin.assignments.schedule') }}"
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-green-600" data-icon="mdi:calendar-clock" data-width="20"></span>
                            <span class="font-medium text-olive-800">Jadwal Penugasan</span>
                        </div>
                    </a>
                    <a href="{{ route('admin.assignments.reports') }}"
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-purple-600" data-icon="mdi:chart-box" data-width="20"></span>
                            <span class="font-medium text-olive-800">Laporan Penugasan</span>
                        </div>
                    </a>
                    <a href="{{ route('admin.assignments.budgets') }}"
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-yellow-600" data-icon="mdi:account-cash" data-width="20"></span>
                            <span class="font-medium text-olive-800">Budget Management</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Assignment Status -->
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
                <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                    <span class="iconify mr-2" data-icon="mdi:chart-donut" data-width="20"></span>
                    Status Overview
                </h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-3"></div>
                            <span class="text-olive-700 font-medium">Pending</span>
                        </div>
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-sm font-medium">14</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                            <span class="text-olive-700 font-medium">In Progress</span>
                        </div>
                        <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-sm font-medium">24</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                            <span class="text-olive-700 font-medium">Completed</span>
                        </div>
                        <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-sm font-medium">89</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-red-500 rounded-full mr-3"></div>
                            <span class="text-olive-700 font-medium">Cancelled</span>
                        </div>
                        <span class="px-2 py-1 bg-red-100 text-red-700 rounded text-sm font-medium">0</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Assignments -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-olive-800 flex items-center">
                        <span class="iconify mr-2" data-icon="mdi:clock-time-four" data-width="20"></span>
                        Recent Assignments
                    </h3>
                    <a href="{{ route('admin.assignments.index') }}"
                       class="text-sm text-olive-600 hover:text-olive-800 font-medium flex items-center">
                        Lihat semua
                        <span class="iconify ml-1" data-icon="mdi:arrow-right" data-width="16"></span>
                    </a>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center justify-center w-10 h-10 bg-blue-100 text-blue-600 rounded-lg">
                                <span class="iconify" data-icon="mdi:microphone" data-width="20"></span>
                            </span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Wedding Event - Hotel Majapahit</h4>
                            <p class="text-sm text-olive-600">MC: Ning Joana • 15 Dec 2024</p>
                            <p class="text-xs text-olive-500 mt-1">Budget: Rp 3.500.000</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs font-medium">In Progress</span>
                            <button {{-- onclick="viewAssignment(1)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="20"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center justify-center w-10 h-10 bg-purple-100 text-purple-600 rounded-lg">
                                <span class="iconify" data-icon="mdi:drama-masks" data-width="20"></span>
                            </span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Corporate Event - PT Sinar Mas</h4>
                            <p class="text-sm text-olive-600">Model: Ning Deninta • 18 Dec 2024</p>
                            <p class="text-xs text-olive-500 mt-1">Budget: Rp 2.800.000</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-medium">Pending</span>
                            <button {{-- onclick="viewAssignment(2)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="20"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center justify-center w-10 h-10 bg-green-100 text-green-600 rounded-lg">
                                <span class="iconify" data-icon="mdi:music" data-width="20"></span>
                            </span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Birthday Party - Wira Garden</h4>
                            <p class="text-sm text-olive-600">Singer: Cak Juan • 10 Dec 2024</p>
                            <p class="text-xs text-olive-500 mt-1">Budget: Rp 2.200.000</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">Completed</span>
                            <button {{-- onclick="viewAssignment(3)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="20"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="flex-shrink-0">
                            <span class="inline-flex items-center justify-center w-10 h-10 bg-yellow-100 text-yellow-600 rounded-lg">
                                <span class="iconify" data-icon="mdi:microphone-variant" data-width="20"></span>
                            </span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Seminar - Universitas Airlangga</h4>
                            <p class="text-sm text-olive-600">MC: Cak Maudah • 22 Dec 2024</p>
                            <p class="text-xs text-olive-500 mt-1">Budget: Rp 1.800.000</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-medium">Pending</span>
                            <button {{-- onclick="viewAssignment(4)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="20"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics & Schedule -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                <span class="iconify mr-2" data-icon="mdi:chart-bar" data-width="20"></span>
                Assignment Analytics
            </h3>
            <div class="h-64 flex items-center justify-center text-olive-500">
                <div class="text-center">
                    <span class="iconify" data-icon="mdi:chart-bar" data-width="64"></span>
                    <p class="mt-2">Chart analitik penugasan akan ditampilkan di sini</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                <span class="iconify mr-2" data-icon="mdi:calendar-month" data-width="20"></span>
                Upcoming Schedule
            </h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 rounded-lg bg-olive-50 border border-olive-100">
                    <div>
                        <h4 class="font-medium text-olive-800">Wedding Event</h4>
                        <p class="text-sm text-olive-600">15 Dec 2024 • 19:00</p>
                    </div>
                    <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs font-medium">Today</span>
                </div>
                <div class="flex items-center justify-between p-3 rounded-lg bg-gray-50 border border-gray-100">
                    <div>
                        <h4 class="font-medium text-olive-800">Corporate Event</h4>
                        <p class="text-sm text-olive-600">18 Dec 2024 • 09:00</p>
                    </div>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-medium">3 days</span>
                </div>
                <div class="flex items-center justify-between p-3 rounded-lg bg-gray-50 border border-gray-100">
                    <div>
                        <h4 class="font-medium text-olive-800">Seminar Event</h4>
                        <p class="text-sm text-olive-600">22 Dec 2024 • 14:00</p>
                    </div>
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-medium">1 week</span>
                </div>
            </div>
        </div>
    </div>
@endsection
