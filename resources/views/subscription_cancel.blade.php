<x-layouts.admin>

    <x-slot name="title">Upravljanje z naročnino</x-slot>

    <x-slot name="content">
        <div class="justify-self-center pt-8">
            <div class="p-6  md:mx-auto">
                <div class="text-center">
                    <h3 class="md:text-2xl text-base text-gray-800 font-semibold text-center">Naročnina je bila uspešno preklicana</h3>
                    <p class="text-gray-600 my-2">Do polno funkcionalnega programa akaunting boste lahko dostopali do:</p>
                    <p class="text-gray-600 font-bold">{{ $sub_ended }}</p>
                    <div class="py-10 text-center">
                        <a href="{{ route('dashboard') }}" class="px-12 bg-purple hover:bg-purple-700 text-white font-semibold py-3">
                            Na prvo stran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin>
