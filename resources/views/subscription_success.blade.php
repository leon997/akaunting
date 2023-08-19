<x-layouts.admin>
    <x-slot name="title">Naročnina</x-slot>

    <x-slot name="content">
        <div class="justify-self-center h-screen">
            <div class="p-6  md:mx-auto mt-6">
                <svg viewBox="0 0 24 24" class="text-purple-600 w-16 h-16 mx-auto my-6">
                    <path fill="currentColor"
                          d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                    </path>
                </svg>
                <div class="text-center">
                    <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Plačilo uspešno!</h3>
                    <p class="text-gray-600 my-2">Hvala za nakup naročnine programa Akaunting.</p>
                    <p>Lahko pričnete z uporabo polne različice programa.</p>
                    <div class="py-10 text-center">
                        <a href="{{ route('dashboard') }}" class="px-12 bg-purple hover:bg-purple-400 text-white font-semibold py-3">
                            Na prvo stran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin>
