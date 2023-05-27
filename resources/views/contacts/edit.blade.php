<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="form create mt-2">
                    <h3>Contact's details</h3>
                    <form class="flex flex-col" method="POST" action="{{ route('contacts.update', $contact->id) }}">
                        @csrf
                        @method('PUT')
                        <label class="mt-3">
                            Name:
                            <input class="w-full" type="text" name="name" value="{{ $contact->name }}" />
                        </label>
                        <label class="mt-3">
                            Email:
                            <input class="w-full" type="email" name="email" value="{{ $contact->email }}"/>
                        </label>
                        <label class="mt-3">
                            Contact:
                            <input class="w-full" type="text" name="contact" value="{{ $contact->contact }}" />
                        </label>
                        <button class="mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
