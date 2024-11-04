@extends('layouts.main')

@section('content')
    <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0">
        <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow ">
            <h2 class="text-2xl font-bold text-gray-900 ">
                Login Admin
            </h2>
            <form class="mt-8 space-y-6" action="" method="post">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " placeholder="name@company.com" required>
                    @if ($errors->has('email'))
                    <span class="text-red-700 mt-1">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 " required>
                </div>
                <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-biru rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto ">Login to your account</button>
            </form>
        </div>
    </div>
@endsection