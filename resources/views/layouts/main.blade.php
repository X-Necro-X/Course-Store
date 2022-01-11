<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Store</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header id="home" class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                <img src="{{ asset('storage/images/logo.png') }}" width="75" alt="logo">
                <span class="ml-3 text-xl">Course Store</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a href="{{ route('home') }}" class="mr-5 hover:text-white cursor-pointer">Home</a>
                <a href="{{ route('home') }}#features" class="mr-5 hover:text-white cursor-pointer">Features</a>
                <a href="https://github.com/X-Necro-X/Course-Store" target="_blank"
                    class="mr-5 hover:text-white cursor-pointer">Github Repo</a>
                <a href="https://www.necro.in/" target="_blank" class="mr-5 hover:text-white cursor-pointer">About
                    Me</a>
            </nav>

            <a href="@if($type == 'signup') {{ route('login') }} @else {{ route('register') }} @endif"
                class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">@if($type == 'signup')
                {{ 'LogIn' }} @else {{ 'SignUp' }} @endif
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </header>

    @yield('content')

    <footer class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                <img width="50" src="{{ asset('storage/images/logo.png') }}" alt="logo">
                <span class="ml-3 text-xl">Course Store</span>
            </a>
            <div class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">©
                    Siddharth Mishra —
                    <a href="https://www.necro.in/" class="text-gray-500 ml-1" target="_blank"
                        rel="noopener noreferrer">Website</a>
                </p>
            </div>
        </div>
    </footer>
</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>
