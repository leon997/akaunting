<x-layouts.auth>
    <x-slot name="title">
        {{ trans('auth.login') }}
    </x-slot>

    <x-slot name="content">
        <div>
            <img src="{{ asset('public/img/new_logo.svg') }}" class="w-16" alt="Akaunting" />

            <h1 class="text-xl my-3 text-lighter-gray font-bold">
                {{ trans('auth.login_to') }}
            </h1>
        </div>

        <div :class="(form.response.success) ? 'w-full bg-green-100 text-green-600 p-3 rounded-sm font-semibold text-xs' : 'hidden'"
            v-if="form.response.success"
            v-html="form.response.message"
            v-cloak
        ></div>

        <div :class="(form.response.error) ? 'w-full bg-red-100 text-red-600 p-3 rounded-sm font-semibold text-xs' : 'hidden'"
            v-if="form.response.error"
            v-html="form.response.message"
            v-cloak
        ></div>

        <x-form id="auth" route="login">
            <div class="grid sm:grid-cols-6 gap-x-8 gap-y-6 my-3.5 lg:h-64">
                <x-form.group.email
                    name="email"
                    label="{{ trans('general.email') }}"
                    placeholder="{{ trans('general.email') }}"
                    form-group-class="sm:col-span-6"
                    input-group-class="input-group-alternative"
                />

                <x-form.group.password
                    name="password"
                    label="{{ trans('auth.password.pass') }}"
                    placeholder="{{ trans('auth.password.pass') }}"
                    form-group-class="sm:col-span-6 text-lighter-gray"
                    input-group-class="input-group-alternative"
                />

                <div class="sm:col-span-6 flex flex-row justify-between items-center">
                    @stack('remember_input_start')
                    <div>
                        <x-form.input.checkbox
                            name="remember"
                            label="{{ trans('auth.remember_me') }}"
                            value="1"
                            v-model="form.remember"
                            id="checkbox-remember"
                            class="text-lighter-gray focus:outline-none focus:ring-purple focus:border-purple"
                        />
                    </div>
                    @stack('remember_input_end')

                    @stack('forgotten-password-start')
                    <x-link href="{{ route('forgot') }}" class="text-white hover:text-light-gray text-sm" override="class">
                        {{ trans('auth.forgot_password') }}
                    </x-link>
                    @stack('forgotten-password-end')
                </div>

                <x-button
                    type="submit"
                    ::disabled="form.loading"
                    class="relative flex items-center justify-center bg-purple hover:bg-purple-700 text-white font-bold px-6 py-1.5 text-base rounded-lg disabled:bg-purple-100 sm:col-span-3"
                    override="class"
                >
                    <x-button.loading>
                        {{ trans('auth.login') }}
                    </x-button.loading>
                </x-button>

                <div class="sm:col-span-6 flex flex-row justify-between items-center">
                        <x-link href="{{ route('signUp') }}" class="text-white hover:text-light-gray text-base" override="class">
                            {{ trans('auth.sign_up') }}
                        </x-link>
                </div>
            </div>
        </x-form>
    </x-slot>

    <x-script folder="auth" file="common" />
</x-layouts.auth>
