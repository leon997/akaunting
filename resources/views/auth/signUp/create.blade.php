<x-layouts.auth>
    <x-slot name="title">
        {{ trans('auth.sign_up') }}
    </x-slot>

    <x-slot name="content">
        <div>
            <img src="{{ asset('public/img/new_logo.svg') }}" class="w-16" alt="Akaunting" />

            <h1 class="text-xl my-3 font-bold text-lighter-gray">
                {{ trans('auth.sign_up_to') }}
            </h1>
        </div>

        <div :class="(form.response.success) ? 'w-full bg-white-100 text-purple p-3 rounded-sm font-semibold text-xs' : 'hidden'"
            v-if="form.response.success"
            v-html="form.response.message"
            v-cloak
        ></div>

        <div :class="(form.response.error) ? 'w-full bg-red-100 text-red-600 p-3 rounded-sm font-semibold text-xs' : 'hidden'"
            v-if="form.response.error"
            v-html="form.response.message"
            v-cloak
        ></div>

        <x-form id="auth" route="signUp.store">
            <div class="grid sm:grid-cols-6 gap-x-8 gap-y-6 my-2.5">

                <x-form.group.text
                    name="name"
                    label="{{ trans('install.settings.user_name') }}"
                    value=""
                    form-group-class="sm:col-span-6 text-white" />

                <x-form.group.text
                    name="user_email"
                    label="{{ trans('settings.company.email') }}"
                    value=""
                    form-group-class="sm:col-span-6 text-white" />

                <x-form.group.text
                    name="company_name"
                    label="{{ trans('general.company_name') }}"
                    value=""
                    form-group-class="sm:col-span-6 text-white" />

                <x-form.group.password
                    name="user_password"
                    label="{{ trans('auth.password.pass') }}"
                    placeholder=""
                    form-group-class="sm:col-span-6 text-white" />

                <x-form.group.password
                    name="user_password_confirmation"
                    label="Ponovi geslo"
                    placeholder=""
                    form-group-class="sm:col-span-6 text-white"
                    input-group-class="input-group-alternative"/>

                <x-button
                    type="submit"
                    ::disabled="form.loading"
                    class="relative flex items-center justify-center bg-purple hover:bg-purple-700 text-white px-6 py-1.5 text-base rounded-lg disabled:bg-purple-700 sm:col-span-3 font-bold"
                    override="class"
                    data-loading-text="{{ trans('general.loading') }}"
                >
                <x-button.loading>
                    Nadaljuj
                </x-button.loading>
                </x-button>
            </div>
        </x-form>
    </x-slot>
    <x-script folder="auth" file="common" />
</x-layouts.auth>
