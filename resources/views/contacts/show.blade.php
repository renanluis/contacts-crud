<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact\'s details') }}
        </h2>
    </x-slot>

    <div class="container mx-auto my-4">
        <div>

            <div class="bg-white relative shadow rounded-lg w-5/6 md:w-5/6  lg:w-4/6 xl:w-3/6 mx-auto">

                
                <div class="mt-16 p-4">
               

                    <div class="w-full">
                        <div class="mt-5 w-full flex flex-col items-center overflow-hidden text-sm text-center">
                            <p class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                <strong>ID: </strong>{{ $contact->id }}
                            </p>
                            <p class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                <strong>Name: </strong>{{ $contact->name }}
                            </p>
                            <p class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                <strong>Email: </strong>{{ $contact->email }}
                            </p>
                            <p class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                <strong>Contact: </strong>{{ $contact->contact}}
                            </p>
                        </div>
                    </div>
                    <div class="my-5 px-6">
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="m-2 text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-gray-900 hover:bg-black hover:text-white">Edit</a>
                    </div>
                    <form class="flex justify-end" method="POST" action="{{ route('contacts.destroy', $contact->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="mx-8 w-full text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-red-600 hover:bg-red hover:text-white">Delete</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
