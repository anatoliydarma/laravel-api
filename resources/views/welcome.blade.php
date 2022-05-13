<x-app-layout>
  <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
    <x-slot name="header">

      @if (Route::has('login'))
      <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
        @endif
        @endauth
      </div>
      @endif
    </x-slot>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

      <h1 class="text-4xl font-bold text-gray-600 dark:text-gray-200">Free Image Manipulation API</h1>

    </div>
  </div>
</x-app-layout>
