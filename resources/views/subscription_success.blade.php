<x-layouts.admin>
    <x-slot name="title">Naročnina</x-slot>

    <x-slot name="content">
        <div class="justify-self-center h-screen">
            <div class="p-6  md:mx-auto mt-6">
                <lottie-player class="mx-auto" src="https://lottie.host/44bfefcf-237a-46b8-b766-7bbd001a2235/d2uIXlYZLg.json" background="transparent" speed="1" style="width: 300px; height: 300px;" autoplay></lottie-player>
                <div class="text-center">
                    <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Plačilo uspešno!</h3>
                    <p class="text-gray-800 my-2">Hvala za nakup naročnine programa Akaunting.</p>
                    <p>Lahko pričnete z uporabo polne različice programa.</p>
                    <div class="py-10 text-center">
                        <a href="{{ route('dashboard') }}"">
                        <x-button
                            type="Submit"
                            ::disabled="form.loading"
                            class="flex items-center justify-center mx-auto text-white bg-purple hover:bg-purple-700 px-3 py-2 mt-2 text-base rounded-lg disabled:bg-purple-700"
                            override="class"
                        >
                            <x-button.loading>
                                Na Nadzorno ploščo
                            </x-button.loading>
                        </x-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin>
