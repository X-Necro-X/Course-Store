@extends('layouts.main')

@section('content')

<section class="text-gray-400 bg-gray-900 body-font py-14">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="lg:w-2/5 md:w-1/2 w-full bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col ml-auto mr-auto">
            <h2 class="text-white text-lg font-medium title-font mb-5">Sign Up</h2>
            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-400">Full Name</label>
                <input type="name" id="name" name="name" value="{{ old('name') }}"
                    class="@error('name') border-red-500 @enderror w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-purple-900 rounded border border-gray-600 focus:border-purple-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
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
                <label for="password_confirmation" class="leading-7 text-sm text-gray-400">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-purple-900 rounded border border-gray-600 focus:border-purple-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="buyer" class="leading-7 text-sm text-gray-400">Buyer</label>
                <input type="radio" id="buyer" name="type" checked="checked" value="buyer"
                    class="w-1/2 bg-gray-600 bg-opacity-20 focus:bg-transparent rounded border border-gray-600 cursor-pointer text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="seller" class="leading-7 text-sm text-gray-400">Seller</label>
                <input type="radio" id="seller" name="type" value="seller"
                    class="w-1/2 bg-gray-600 bg-opacity-20 focus:bg-transparent rounded border border-gray-600 cursor-pointer text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button type="submit"
                class="text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">Sign
                Up</button>
        </div>
    </form>
</section>

@endsection
