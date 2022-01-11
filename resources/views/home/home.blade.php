@extends('layouts.main')

@section('content')

<section class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-14 mx-auto flex flex-wrap items-center">
        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <h1 class="title-font sm:text-5xl text-3xl mb-4 font-medium text-white">Welcome to Course Store</h1>
            <p class="leading-relaxed mt-4">A one stop solution for buying, selling and viewing online courses.</p>
        </div>
        <div
            class="lg:w-2/5 md:w-1/2 bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h2 class="text-white text-lg font-medium title-font mb-5">Log In</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="@error('email') border-red-500 @enderror w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-purple-900 rounded border border-gray-600 focus:border-purple-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="relative mb-4">
                    <label for="password" class="leading-7 text-sm text-gray-400">Password</label>
                    <input type="password" id="password" name="password"
                        class="@error('password') border-red-500 @enderror w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-purple-900 rounded border border-gray-600 focus:border-purple-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="relative mb-4">
                    <label for="remember" class="leading-7 text-sm text-gray-400">Remember Me</label>
                    <input type="checkbox" id="remember" name="remember"
                        class="w-1/2 bg-gray-600 bg-opacity-20 focus:bg-transparent rounded border border-gray-600 cursor-pointer text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button type="submit" class="text-white w-full bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">Log
                    In</button>
                @if (session('status'))
                <div class="text-red-500 mt-2 text-sm">
                    {{ session('status') }}
                </div>
                @endif
            </form>
        </div>
    </div>
</section>
<section id="features" class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-5 py-14 mx-auto flex flex-wrap">
        <div class="flex flex-col text-center w-full mb-20">
            <h2 class="text-xs text-purple-400 tracking-widest font-medium title-font mb-1">INCLUDED IN COURSE STORE
            </h2>
            <h1 class="sm:text-5xl text-2xl font-medium title-font text-white">Features</h1>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-800 bg-opacity-60 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <h2 class="text-white text-lg title-font font-medium">Buying</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Course Store is a great platform where students can buy
                            a huge variety of courses online.</p>
                        <a class="mt-3 text-purple-400 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-800 bg-opacity-60 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <h2 class="text-white text-lg title-font font-medium">Selling</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Course Store gives a large customer base for
                            individuals and organizations to sell their courses.</p>
                        <a class="mt-3 text-purple-400 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-800 bg-opacity-60 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <h2 class="text-white text-lg title-font font-medium">Viewing</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">The bought courses can be viewed and managed on the
                            same platform without any hassle.</p>
                        <a class="mt-3 text-purple-400 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-800 bg-opacity-60 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <h2 class="text-white text-lg title-font font-medium">Laravel</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Course store is made using Laravel 8. Laravel is a
                            widely used and reliable framework for PHP.</p>
                        <a href="https://laravel.com/" target="_blank"
                            class="mt-3 text-purple-400 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-800 bg-opacity-60 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <h2 class="text-white text-lg title-font font-medium">MySQL</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Database is implemented using MySQL. MySQL provides
                            consistency and durability in transactions.</p>
                        <a href="https://www.mysql.com/" target="_blank"
                            class="mt-3 text-purple-400 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-800 bg-opacity-60 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <h2 class="text-white text-lg title-font font-medium">Razorpay</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Razorpay payment gateway is used for integrating
                            payment mechanism in Course Store.</p>
                        <a href="https://razorpay.com/" target="_blank"
                            class="mt-3 text-purple-400 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
