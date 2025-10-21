@extends('dashboard.layouts')

@section('title', 'Dashboard Talent')
@section('dashboard-title', 'Dashboard Talent')
@section('breadcrumb', 'Talent Management')

@section('content')
    <!-- Talent Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Total Talents</p>
                    <p class="text-3xl font-bold text-olive-800">45</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">↗ +3</span> anggota baru
                    </p>
                </div>
                <div class="bg-purple-100 rounded-lg p-3">
                    <span class="iconify text-purple-600" data-icon="mdi:account-star" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Active Talents</p>
                    <p class="text-3xl font-bold text-olive-800">32</p>
                    <p class="text-xs text-olive-500 mt-1">Siap bertugas</p>
                </div>
                <div class="bg-green-100 rounded-lg p-3">
                    <span class="iconify text-green-600" data-icon="mdi:account-check" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">On Assignment</p>
                    <p class="text-3xl font-bold text-olive-800">12</p>
                    <p class="text-xs text-olive-500 mt-1">Sedang bertugas</p>
                </div>
                <div class="bg-blue-100 rounded-lg p-3">
                    <span class="iconify text-blue-600" data-icon="mdi:account-clock" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">This Month Earnings</p>
                    <p class="text-3xl font-bold text-olive-800">85M</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">↗ +12%</span> vs last month
                    </p>
                </div>
                <div class="bg-yellow-100 rounded-lg p-3">
                    <span class="iconify text-yellow-600" data-icon="mdi:cash" data-width="32"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Top Performers -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Quick Actions -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6 mb-6">
                <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                    <span class="iconify mr-2" data-icon="mdi:lightning-bolt" data-width="20"></span>
                    Quick Actions
                </h3>
                <div class="space-y-3">
                    <a {{-- href="{{ route('admin.talents.create') }}" --}}
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-purple-600" data-icon="mdi:account-plus" data-width="20"></span>
                            <span class="font-medium text-olive-800">Tambah Talent Baru</span>
                        </div>
                    </a>
                    <a {{-- href="{{ route('admin.talents.portfolio') }}" --}}
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-blue-600" data-icon="mdi:image-multiple" data-width="20"></span>
                            <span class="font-medium text-olive-800">Kelola Portfolio</span>
                        </div>
                    </a>
                    <a {{-- href="{{ route('admin.talents.ratings') }}" --}}
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-yellow-600" data-icon="mdi:star" data-width="20"></span>
                            <span class="font-medium text-olive-800">Review & Rating</span>
                        </div>
                    </a>
                    <a {{-- href="{{ route('admin.talents.schedule') }}" --}}
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-green-600" data-icon="mdi:calendar-account" data-width="20"></span>
                            <span class="font-medium text-olive-800">Jadwal Talent</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Talent Categories -->
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
                <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                    <span class="iconify mr-2" data-icon="mdi:shape" data-width="20"></span>
                    Talent Specialization
                </h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-olive-700 font-medium">MC/Host</span>
                        <span class="px-2 py-1 bg-purple-100 text-purple-700 rounded text-sm font-medium">18</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-olive-700 font-medium">Model</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-sm font-medium">15</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-olive-700 font-medium">Dancer</span>
                        <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-sm font-medium">8</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-olive-700 font-medium">Singer</span>
                        <span class="px-2 py-1 bg-pumpkin-100 text-pumpkin-700 rounded text-sm font-medium">4</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Performers -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-olive-800 flex items-center">
                        <span class="iconify mr-2" data-icon="mdi:trophy" data-width="20"></span>
                        Top Performers
                    </h3>
                    <a {{-- href="{{ route('admin.talents.index') }}" --}}
                       class="text-sm text-olive-600 hover:text-olive-800 font-medium flex items-center">
                        Lihat semua
                        <span class="iconify ml-1" data-icon="mdi:arrow-right" data-width="16"></span>
                    </a>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/talents/ning_joana_1.jpg') }}" alt="Ning Joana" class="w-12 h-12 rounded-full object-cover border-2 border-olive-200">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Ning Joana</h4>
                            <p class="text-sm text-olive-600">MC/Host • Rating: 4.9</p>
                            <p class="text-xs text-olive-500 mt-1">8 events bulan ini • Rp 24.000.000</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-right">
                                <div class="flex items-center text-yellow-500">
                                    <span class="iconify mr-1" data-icon="mdi:star" data-width="16"></span>
                                    <span class="text-sm font-medium">4.9</span>
                                </div>
                                <span class="text-xs text-olive-500">45 reviews</span>
                            </div>
                            <button {{-- onclick="viewTalentProfile(1)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="20"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/talents/cak_maudah_1.jpg') }}" alt="Cak Maudah" class="w-12 h-12 rounded-full object-cover border-2 border-olive-200">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Cak Maudah</h4>
                            <p class="text-sm text-olive-600">MC/Host • Rating: 4.8</p>
                            <p class="text-xs text-olive-500 mt-1">6 events bulan ini • Rp 18.000.000</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-right">
                                <div class="flex items-center text-yellow-500">
                                    <span class="iconify mr-1" data-icon="mdi:star" data-width="16"></span>
                                    <span class="text-sm font-medium">4.8</span>
                                </div>
                                <span class="text-xs text-olive-500">38 reviews</span>
                            </div>
                            <button {{-- onclick="viewTalentProfile(2)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="20"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/talents/ning_deninta_1.jpg') }}" alt="Ning Deninta" class="w-12 h-12 rounded-full object-cover border-2 border-olive-200">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Ning Deninta</h4>
                            <p class="text-sm text-olive-600">Model • Rating: 4.7</p>
                            <p class="text-xs text-olive-500 mt-1">5 events bulan ini • Rp 15.000.000</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-right">
                                <div class="flex items-center text-yellow-500">
                                    <span class="iconify mr-1" data-icon="mdi:star" data-width="16"></span>
                                    <span class="text-sm font-medium">4.7</span>
                                </div>
                                <span class="text-xs text-olive-500">32 reviews</span>
                            </div>
                            <button {{-- onclick="viewTalentProfile(3)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="20"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/talents/cak_juan_1.jpg') }}" alt="Cak Juan" class="w-12 h-12 rounded-full object-cover border-2 border-olive-200">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Cak Juan</h4>
                            <p class="text-sm text-olive-600">MC/Host • Rating: 4.6</p>
                            <p class="text-xs text-olive-500 mt-1">4 events bulan ini • Rp 12.000.000</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-right">
                                <div class="flex items-center text-yellow-500">
                                    <span class="iconify mr-1" data-icon="mdi:star" data-width="16"></span>
                                    <span class="text-sm font-medium">4.6</span>
                                </div>
                                <span class="text-xs text-olive-500">28 reviews</span>
                            </div>
                            <button {{-- onclick="viewTalentProfile(4)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="20"></span>
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
                Talent Performance Trend
            </h3>
            <div class="h-64 flex items-center justify-center text-olive-500">
                <div class="text-center">
                    <span class="iconify" data-icon="mdi:chart-line" data-width="64"></span>
                    <p class="mt-2">Chart performa talent akan ditampilkan di sini</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                <span class="iconify mr-2" data-icon="mdi:chart-pie" data-width="20"></span>
                Specialization Distribution
            </h3>
            <div class="h-64 flex items-center justify-center text-olive-500">
                <div class="text-center">
                    <span class="iconify" data-icon="mdi:chart-pie" data-width="64"></span>
                    <p class="mt-2">Chart distribusi spesialisasi akan ditampilkan di sini</p>
                </div>
            </div>
        </div>
    </div>
@endsection
