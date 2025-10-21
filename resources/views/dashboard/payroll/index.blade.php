@extends('dashboard.layouts')

@section('title', 'Dashboard Penggajian')
@section('dashboard-title', 'Dashboard Penggajian')
@section('breadcrumb', 'Payroll Management')

@section('content')
    <!-- Payroll Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Total Payroll</p>
                    <p class="text-3xl font-bold text-olive-800">485M</p>
                    <p class="text-xs text-olive-500 mt-1">December 2024</p>
                </div>
                <div class="bg-green-100 rounded-lg p-3">
                    <span class="iconify text-green-600" data-icon="mdi:cash-multiple" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Processed</p>
                    <p class="text-3xl font-bold text-olive-800">32</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">Sudah dibayar</span>
                    </p>
                </div>
                <div class="bg-blue-100 rounded-lg p-3">
                    <span class="iconify text-blue-600" data-icon="mdi:check-circle" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Pending</p>
                    <p class="text-3xl font-bold text-olive-800">13</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-yellow-600">Menunggu pembayaran</span>
                    </p>
                </div>
                <div class="bg-yellow-100 rounded-lg p-3">
                    <span class="iconify text-yellow-600" data-icon="mdi:clock-outline" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Average per Talent</p>
                    <p class="text-3xl font-bold text-olive-800">10.8M</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">↗ +5%</span> vs last month
                    </p>
                </div>
                <div class="bg-purple-100 rounded-lg p-3">
                    <span class="iconify text-purple-600" data-icon="mdi:account-cash" data-width="32"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Recent Payments -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Quick Actions -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6 mb-6">
                <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                    <span class="iconify mr-2" data-icon="mdi:lightning-bolt" data-width="20"></span>
                    Quick Actions
                </h3>
                <div class="space-y-3">
                    <a href="{{ route('admin.payroll.create') }}"
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-green-600" data-icon="mdi:cash-plus" data-width="20"></span>
                            <span class="font-medium text-olive-800">Proses Gaji Baru</span>
                        </div>
                    </a>
                    <a href="{{ route('admin.payroll.bulk-process') }}"
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-blue-600" data-icon="mdi:cash-check" data-width="20"></span>
                            <span class="font-medium text-olive-800">Proses Bulk Payment</span>
                        </div>
                    </a>
                    <a href="{{ route('admin.payroll.reports') }}"
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-purple-600" data-icon="mdi:file-chart" data-width="20"></span>
                            <span class="font-medium text-olive-800">Laporan Gaji</span>
                        </div>
                    </a>
                    <a href="{{ route('admin.payroll.tax-management') }}"
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-red-600" data-icon="mdi:percent" data-width="20"></span>
                            <span class="font-medium text-olive-800">Manajemen Pajak</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Payment Status -->
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
                <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                    <span class="iconify mr-2" data-icon="mdi:chart-donut" data-width="20"></span>
                    Payment Status
                </h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                            <span class="text-olive-700 font-medium">Paid</span>
                        </div>
                        <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-sm font-medium">32</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full mr-3"></div>
                            <span class="text-olive-700 font-medium">Pending</span>
                        </div>
                        <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-sm font-medium">13</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                            <span class="text-olive-700 font-medium">Processing</span>
                        </div>
                        <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-sm font-medium">5</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Payments -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-olive-800 flex items-center">
                        <span class="iconify mr-2" data-icon="mdi:clock-time-four" data-width="20"></span>
                        Recent Payments
                    </h3>
                    <a href="{{ route('admin.payroll.index') }}"
                       class="text-sm text-olive-600 hover:text-olive-800 font-medium flex items-center">
                        Lihat semua
                        <span class="iconify ml-1" data-icon="mdi:arrow-right" data-width="16"></span>
                    </a>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/talents/ning_joana_1.jpg') }}" alt="Ning Joana" class="w-10 h-10 rounded-full object-cover border-2 border-olive-200">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Ning Joana</h4>
                            <p class="text-sm text-olive-600">8 events • December 2024</p>
                            <p class="text-xs text-olive-500 mt-1">Transfer: BCA - *****3456</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-right">
                                <p class="font-semibold text-olive-800">Rp 24.000.000</p>
                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">Paid</span>
                            </div>
                            <button {{-- onclick="viewPayment(1)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="20"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/talents/cak_maudah_1.jpg') }}" alt="Cak Maudah" class="w-10 h-10 rounded-full object-cover border-2 border-olive-200">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Cak Maudah</h4>
                            <p class="text-sm text-olive-600">6 events • December 2024</p>
                            <p class="text-xs text-olive-500 mt-1">Transfer: Mandiri - *****7890</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-right">
                                <p class="font-semibold text-olive-800">Rp 18.000.000</p>
                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">Paid</span>
                            </div>
                            <button {{-- onclick="viewPayment(2)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="20"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/talents/ning_deninta_1.jpg') }}" alt="Ning Deninta" class="w-10 h-10 rounded-full object-cover border-2 border-olive-200">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Ning Deninta</h4>
                            <p class="text-sm text-olive-600">5 events • December 2024</p>
                            <p class="text-xs text-olive-500 mt-1">Transfer: BRI - *****2345</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-right">
                                <p class="font-semibold text-olive-800">Rp 15.000.000</p>
                                <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-medium">Pending</span>
                            </div>
                            <button {{-- onclick="viewPayment(3)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="20"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors border border-olive-100">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/talents/cak_juan_1.jpg') }}" alt="Cak Juan" class="w-10 h-10 rounded-full object-cover border-2 border-olive-200">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800">Cak Juan</h4>
                            <p class="text-sm text-olive-600">4 events • December 2024</p>
                            <p class="text-xs text-olive-500 mt-1">Transfer: BNI - *****5678</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-right">
                                <p class="font-semibold text-olive-808">Rp 12.000.000</p>
                                <span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-xs font-medium">Processing</span>
                            </div>
                            <button {{-- onclick="viewPayment(4)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:eye" data-width="20"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics & Summary -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                <span class="iconify mr-2" data-icon="mdi:chart-line" data-width="20"></span>
                Monthly Payroll Trend
            </h3>
            <div class="h-64 flex items-center justify-center text-olive-500">
                <div class="text-center">
                    <span class="iconify" data-icon="mdi:chart-line" data-width="64"></span>
                    <p class="mt-2">Chart trend gaji bulanan akan ditampilkan di sini</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                <span class="iconify mr-2" data-icon="mdi:calculator" data-width="20"></span>
                Tax & Deduction Summary
            </h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 rounded-lg bg-gray-50 border border-gray-100">
                    <div>
                        <h4 class="font-medium text-olive-800">Total Gross</h4>
                        <p class="text-sm text-olive-600">Before deductions</p>
                    </div>
                    <span class="font-semibold text-olive-800">Rp 485.000.000</span>
                </div>
                <div class="flex items-center justify-between p-3 rounded-lg bg-red-50 border border-red-100">
                    <div>
                        <h4 class="font-medium text-olive-800">Tax (PPh 21)</h4>
                        <p class="text-sm text-olive-600">5% from gross</p>
                    </div>
                    <span class="font-semibold text-red-600">-Rp 24.250.000</span>
                </div>
                <div class="flex items-center justify-between p-3 rounded-lg bg-blue-50 border border-blue-100">
                    <div>
                        <h4 class="font-medium text-olive-800">Admin Fee</h4>
                        <p class="text-sm text-olive-600">Platform management</p>
                    </div>
                    <span class="font-semibold text-blue-600">-Rp 9.700.000</span>
                </div>
                <div class="flex items-center justify-between p-3 rounded-lg bg-green-50 border border-green-100">
                    <div>
                        <h4 class="font-medium text-olive-800">Net Pay</h4>
                        <p class="text-sm text-olive-600">Amount to be paid</p>
                    </div>
                    <span class="font-semibold text-green-600">Rp 451.050.000</span>
                </div>
            </div>
        </div>
    </div>
@endsection
