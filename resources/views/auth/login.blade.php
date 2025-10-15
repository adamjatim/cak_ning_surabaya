@extends('layouts.app')
@section('title', 'Login - Cak Ning Surabaya')
@section('styles')
    <style>
        .drawer {
            display: none
        }
    </style>
@endsection
@section('content')
    <div>
        <div class="bg-white dark:bg-gray-900">
            <div class="flex justify-center h-screen">
                <div class="hidden bg-cover bg-center lg:block lg:w-2/3"
                    style="background-image: url({{ asset('images/cover_2.jpg') }})">
                    <div class="flex items-center h-full px-20 bg-gray-900 opacity-10">
                        {{-- <div>
                            <h2 class="text-2xl font-bold text-white sm:text-3xl">Meraki UI</h2>

                            <p class="max-w-xl mt-3 text-gray-300">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. In
                                autem ipsa, nulla laboriosam dolores, repellendus perferendis libero suscipit nam temporibus
                                molestiae
                            </p>
                        </div> --}}
                    </div>
                </div>

                <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                    <div class="flex-1">
                        <div class="text-center">
                            <div class="flex justify-center mx-auto">
                                <img class="w-auto h-20 sm:h-18" src="{{ asset('images/logo/cak_ning_full_color.svg') }}" alt="">
                            </div>

                            {{-- <p class="mt-3 text-gray-500 dark:text-gray-300">Login</p> --}}
                        </div>

                        <div class="mt-8">
                            <form>
                                <div>
                                    <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email
                                        Address</label>
                                    <input type="email" name="email" id="email" placeholder="example@example.com"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                </div>

                                <div class="mt-6">
                                    <div class="flex justify-between mb-2">
                                        <label for="password"
                                            class="text-sm text-gray-600 dark:text-gray-200">Password</label>
                                        {{-- <a href="#"
                                            class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot
                                            password?</a> --}}
                                    </div>

                                    <input type="password" name="password" id="password" placeholder="Your Password"
                                        class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                </div>

                                <div class="mt-6">
                                    <button
                                        class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                        Login
                                    </button>
                                </div>

                            </form>

                            {{-- <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a
                                    href="#"
                                    class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
