<x-layouts.admin>
    <x-slot name="title">Upravljanje z naročnino</x-slot>
    <x-slot name="content">
        <x-slot name="head">
            <x-form.section.head title="{{ trans('general.general') }}" description="{{ trans('companies.form_description.general') }}" />
        </x-slot>
            @if($user_expired == false)
                <form method="get" action={{route('subscription.cancel')}}>
                    <label>{{ $user_name }}</label><br>
                    <label>{{ $sub_name }}</label><br>
                    <x-button
                        type="submit"
                        ::disabled="form.loading"
                        class="relative flex items-center justify-center bg-green hover:bg-green-700 text-white px-6 py-1.5 text-base rounded-lg disabled:bg-green-100 sm:col-span-6 mt-20"
                        override="class"
                        data-loading-text="{{ trans('general.loading') }}"
                    >
                        <i v-if="form.loading" class="submit-spin absolute w-2 h-2 rounded-full left-0 right-0 -top-3.5 m-auto"></i>
                        <span :class="[{'opacity-0': form.loading}]">Prekini naročnino</span>
                    </x-button>
                </form>
            @else
                <form method="get" action={{route('subscription.resume')}}>
                    <label>{{ $user_name }}</label><br>
                    <label>{{ $sub_name }}</label><br>
                    <x-button
                        type="submit"
                        ::disabled="form.loading"
                        class="relative flex items-center justify-center bg-green hover:bg-green-700 text-white px-6 py-1.5 text-base rounded-lg disabled:bg-green-100 sm:col-span-6 mt-20"
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
