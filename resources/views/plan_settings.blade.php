<x-layouts.admin>
    <x-slot name="title">Upravljanje z naročnino</x-slot>
    <x-slot name="content">
        <div class="border-b-2 border-gray-200 pt-8">
            <h2 class="lg:text-lg font-medium text-black">
                Preklic naročnine
            </h2>
            <span class="text-sm font-light text-black block gap-x-1 mt-1">
                Vaša naročnina bo aktivna do spodaj navedenega datuma.
            </span>
        </div>
            @if($user_expired == false)
                <form class="pt-4" method="get" action={{route('subscription.cancel')}}>
                    <label> Veljavnost naročnine: {{ $sub_end }}</label><br>
                    <x-button
                        type="submit"
                        ::disabled="form.loading"
                        class="relative flex items-center justify-center bg-green hover:bg-green-700 text-white px-6 py-1.5 text-base rounded-lg disabled:bg-green-100 sm:col-span-6 mt-4"
                        override="class"
                        data-loading-text="{{ trans('general.loading') }}"
                    >
                        <i v-if="form.loading" class="submit-spin absolute w-2 h-2 rounded-full left-0 right-0 -top-3.5 m-auto"></i>
                        <span :class="[{'opacity-0': form.loading}]">Prekini naročnino</span>
                    </x-button>
                </form>
            @else
                <form class="pt-4" method="get" action={{route('subscription.resume')}}>
                    <label> Veljavnost naročnine: {{ $sub_end }}</label><br>
                    <x-button
                        type="submit"
                        ::disabled="form.loading"
                        class="relative flex items-center justify-center bg-green hover:bg-green-700 text-white px-6 py-1.5 text-base rounded-lg disabled:bg-green-100 sm:col-span-6 mt-4"
                        override="class"
                        data-loading-text="{{ trans('general.loading') }}"
                    >
                        <i v-if="form.loading" class="submit-spin absolute w-2 h-2 rounded-full left-0 right-0 -top-3.5 m-auto"></i>
                        <span :class="[{'opacity-0': form.loading}]">Ponovno aktiviraj naročnino</span>
                    </x-button>
                </form>
            @endif



    </x-slot>

    <x-script folder="auth" file="users" />
</x-layouts.admin>
