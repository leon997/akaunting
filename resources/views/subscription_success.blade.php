<x-layouts.admin>
    <x-slot name="title">Naročnina</x-slot>

    <x-slot name="content">
        <div class="justify-self-center h-screen">
            <div class="p-6  md:mx-auto mt-6">
                <lottie-player class="mx-auto" src="https://lottie.host/81b3d1db-5645-4881-82d7-d4aa37459e97/k2lDE4Rjjo.json" background="transparent" speed="1" style="width: 300px; height: 300px;"  autoplay></lottie-player>
                <div class="text-center">
                    <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Plačilo uspešno!</h3>
                    <p class="text-gray-800 my-2">Hvala za nakup naročnine programa Akaunting.</p>
                    <p>Lahko pričnete z uporabo polne različice programa.</p>
                    <div class="py-10 text-center">
                        <a href="{{ route('dashboard') }}" class="px-12 bg-purple hover:bg-purple-700 disabled:bg-purple-700 text-white font-semibold py-3">
                            Na domačo stran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin>
