<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php 
                    $users = auth()->user();
                    ?>

                    {{__("Welcome ".$users->name)}}<br>
                    {{ __("You're logged in!") }}
                    
                    {{-- @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}} </td>
                            <td>{{$user->email}} </td>
                            <td>{{$user->role_id}} </td>
                        </tr>
                    @endforeach --}}

                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('users') }}">
                        @csrf
                        <textarea
                            name="message"
                            placeholder="{{ __('New user') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        >{{ old('message') }}</textarea>
                        <x-input-error :messages="$errors->get('Name')" class="mt-2" />
                        <x-primary-button class="mt-4">{{ __('Add User') }}</x-primary-button>
                    </form>


                </div>
            </div>
        </div>
    </div>
  
</x-app-layout>
