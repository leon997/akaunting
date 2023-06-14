<x-layouts.admin>

    <x-slot name="title">Preklic naročnine</x-slot>

    <x-slot name="content">
        <div class="bg-gray-100 justify-self-center">
            <div class="bg-white p-6  md:mx-auto">
                <div class="text-center">
                    <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Naročnina je bila uspešno preklicana</h3>
                    <p class="text-gray-600 my-2">Do polno funkcionalnega programa akaunting boste lahko dostopali do:</p>
                    <p class="font-bold">{{ $sub_end }}</p>
                    <div class="py-10 text-center">
                        <a href="{{ route('dashboard') }}" class="px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                            Na prvo stran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin>
