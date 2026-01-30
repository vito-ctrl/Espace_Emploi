<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <!-- Search Form -->
        <form method="GET" action="{{ route('search.index') }}" class="mb-6 flex max-w-md mx-auto">
            <input 
                type="text" 
                name="search" 
                placeholder="Search users..."
                value="{{ request('search') }}"
                class="flex-1 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
            >
            <button 
                type="submit"
                class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-r-md hover:bg-indigo-700 transition"
            >
                Search
            </button>
        </form>

        <!-- Users List -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @if(isset($users))
                @forelse ($users as $user)
                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 hover:shadow-md transition">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $user->name }}</h3>
                        <p class="text-gray-600 dark:text-gray-400">{{ $user->email }}</p>
                    </div>
                @empty
                    <p class="text-center text-gray-500 col-span-full">No results found</p>
                @endforelse
            @endif
        </div>
    </div>
</x-app-layout>
