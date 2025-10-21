@extends('dashboard.layouts')

@section('title', 'Dashboard Blog')
@section('dashboard-title', 'Dashboard Blog')
@section('breadcrumb', 'Blog Management')

@section('content')
    <!-- Blog Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Total Posts</p>
                    <p class="text-3xl font-bold text-olive-800">32</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">↗ +5</span> bulan ini
                    </p>
                </div>
                <div class="bg-blue-100 rounded-lg p-3">
                    <span class="iconify text-blue-600" data-icon="mdi:post" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Draft Posts</p>
                    <p class="text-3xl font-bold text-olive-800">8</p>
                    <p class="text-xs text-olive-500 mt-1">Siap dipublikasi</p>
                </div>
                <div class="bg-yellow-100 rounded-lg p-3">
                    <span class="iconify text-yellow-600" data-icon="mdi:file-document-edit" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Total Views</p>
                    <p class="text-3xl font-bold text-olive-800">12.5K</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-green-600">↗ +15%</span> minggu ini
                    </p>
                </div>
                <div class="bg-green-100 rounded-lg p-3">
                    <span class="iconify text-green-600" data-icon="mdi:eye" data-width="32"></span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-olive-600 text-sm font-medium">Comments</p>
                    <p class="text-3xl font-bold text-olive-800">186</p>
                    <p class="text-xs text-olive-500 mt-1">
                        <span class="text-blue-600">→ 12</span> pending
                    </p>
                </div>
                <div class="bg-purple-100 rounded-lg p-3">
                    <span class="iconify text-purple-600" data-icon="mdi:comment-multiple" data-width="32"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Recent Posts -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Quick Actions -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6 mb-6">
                <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                    <span class="iconify mr-2" data-icon="mdi:lightning-bolt" data-width="20"></span>
                    Quick Actions
                </h3>
                <div class="space-y-3">
                    <a href="{{ route('admin.blog.create') }}"
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-blue-600" data-icon="mdi:plus-circle" data-width="20"></span>
                            <span class="font-medium text-olive-800">Buat Post Baru</span>
                        </div>
                    </a>
                    <a href="{{ route('admin.blog.index') }}"
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-yellow-600" data-icon="mdi:file-document-edit" data-width="20"></span>
                            <span class="font-medium text-olive-800">Kelola Draft</span>
                        </div>
                    </a>
                    <a href="#"
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-purple-600" data-icon="mdi:tag-multiple" data-width="20"></span>
                            <span class="font-medium text-olive-800">Kelola Kategori</span>
                        </div>
                    </a>
                    <a href="#"
                       class="block w-full p-3 text-left rounded-lg border border-olive-200 hover:bg-olive-50 transition-colors">
                        <div class="flex items-center">
                            <span class="iconify mr-3 text-green-600" data-icon="mdi:comment-multiple" data-width="20"></span>
                            <span class="font-medium text-olive-800">Moderasi Komentar</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Popular Tags -->
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
                <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                    <span class="iconify mr-2" data-icon="mdi:tag" data-width="20"></span>
                    Popular Tags
                </h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-olive-100 text-olive-700 rounded-full text-sm font-medium">Sejarah</span>
                    <span class="px-3 py-1 bg-pumpkin-100 text-pumpkin-700 rounded-full text-sm font-medium">Event</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">Budaya</span>
                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">Pariwisata</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm font-medium">Surabaya</span>
                </div>
            </div>
        </div>

        <!-- Recent Posts -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-olive-800 flex items-center">
                        <span class="iconify mr-2" data-icon="mdi:post" data-width="20"></span>
                        Recent Posts
                    </h3>
                    <a href="{{ route('admin.blog.index') }}"
                       class="text-sm text-olive-600 hover:text-olive-800 font-medium flex items-center">
                        Lihat semua
                        <span class="iconify ml-1" data-icon="mdi:arrow-right" data-width="16"></span>
                    </a>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors">
                        <img src="{{ asset('images/blog/sejarah-paguyuban.jpg') }}" alt="Post" class="w-16 h-16 rounded-lg object-cover flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800 line-clamp-1">Sejarah Paguyuban Cak & Ning Surabaya</h4>
                            <p class="text-sm text-olive-600 line-clamp-2 mt-1">Perjalanan panjang paguyuban dalam melestarikan budaya Surabaya...</p>
                            <div class="flex items-center mt-2 space-x-4">
                                <span class="text-xs text-olive-500">2 jam yang lalu</span>
                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">Published</span>
                                <span class="text-xs text-olive-500 flex items-center">
                                    <span class="iconify mr-1" data-icon="mdi:eye" data-width="12"></span>
                                    1.2K views
                                </span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button {{-- onclick="editPost(1)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:pencil" data-width="16"></span>
                            </button>
                            <button {{-- onclick="deletePost(1)" --}} class="text-red-600 hover:text-red-800">
                                <span class="iconify" data-icon="mdi:delete" data-width="16"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors">
                        <img src="{{ asset('images/blog/filosofi-batik.jpg') }}" alt="Post" class="w-16 h-16 rounded-lg object-cover flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800 line-clamp-1">Filosofi Motif Batik dalam Desain Website</h4>
                            <p class="text-sm text-olive-600 line-clamp-2 mt-1">Mengapa kami mengintegrasikan motif batik tradisional...</p>
                            <div class="flex items-center mt-2 space-x-4">
                                <span class="text-xs text-olive-500">1 hari yang lalu</span>
                                <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs font-medium">Draft</span>
                                <span class="text-xs text-olive-500 flex items-center">
                                    <span class="iconify mr-1" data-icon="mdi:eye" data-width="12"></span>
                                    - views
                                </span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button {{-- onclick="editPost(2)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:pencil" data-width="16"></span>
                            </button>
                            <button {{-- onclick="deletePost(2)" --}} class="text-red-600 hover:text-red-800">
                                <span class="iconify" data-icon="mdi:delete" data-width="16"></span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-lg hover:bg-olive-50 transition-colors">
                        <img src="{{ asset('images/blog/event-cak-ning.jpg') }}" alt="Post" class="w-16 h-16 rounded-lg object-cover flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-olive-800 line-clamp-1">Tips Menjadi MC Profesional</h4>
                            <p class="text-sm text-olive-600 line-clamp-2 mt-1">Panduan lengkap untuk menjadi Master of Ceremony yang handal...</p>
                            <div class="flex items-center mt-2 space-x-4">
                                <span class="text-xs text-olive-500">3 hari yang lalu</span>
                                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">Published</span>
                                <span class="text-xs text-olive-500 flex items-center">
                                    <span class="iconify mr-1" data-icon="mdi:eye" data-width="12"></span>
                                    856 views
                                </span>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button {{-- onclick="editPost(3)" --}} class="text-blue-600 hover:text-blue-800">
                                <span class="iconify" data-icon="mdi:pencil" data-width="16"></span>
                            </button>
                            <button {{-- onclick="deletePost(3)" --}} class="text-red-600 hover:text-red-800">
                                <span class="iconify" data-icon="mdi:delete" data-width="16"></span>
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
                Post Views Trend
            </h3>
            <div class="h-64 flex items-center justify-center text-olive-500">
                <div class="text-center">
                    <span class="iconify" data-icon="mdi:chart-line" data-width="64"></span>
                    <p class="mt-2">Chart views akan ditampilkan di sini</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-olive-200 p-6">
            <h3 class="text-lg font-semibold text-olive-800 mb-4 flex items-center">
                <span class="iconify mr-2" data-icon="mdi:chart-pie" data-width="20"></span>
                Post Categories
            </h3>
            <div class="h-64 flex items-center justify-center text-olive-500">
                <div class="text-center">
                    <span class="iconify" data-icon="mdi:chart-pie" data-width="64"></span>
                    <p class="mt-2">Chart kategori akan ditampilkan di sini</p>
                </div>
            </div>
        </div>
    </div>
@endsection
