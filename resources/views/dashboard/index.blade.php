@extends('dashboard.layouts')

@section('title', 'Dashboard')

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Selamat Datang di Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Example dashboard cards -->
            <div class="bg-white rounded-lg shadow p-4 flex items-center">
                <div class="flex-shrink-0 mr-4">
                    <svg class="h-8 w-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3"></path>
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg>
                </div>
                <div>
                    <div class="text-lg font-semibold">Jumlah Anggota</div>
                    <div class="text-gray-500">120</div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-4 flex items-center">
                <div class="flex-shrink-0 mr-4">
                    <svg class="h-8 w-8 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7"></path>
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg>
                </div>
                <div>
                    <div class="text-lg font-semibold">Event Aktif</div>
                    <div class="text-gray-500">5</div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-4 flex items-center">
                <div class="flex-shrink-0 mr-4">
                    <svg class="h-8 w-8 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M8 17l4-4 4 4"></path>
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg>
                </div>
                <div>
                    <div class="text-lg font-semibold">Postingan Blog</div>
                    <div class="text-gray-500">32</div>
                </div>
            </div>
        </div>
    </div>
@endsection
