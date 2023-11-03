<template>
    <div class="relative bg-body z-10 rounded-lg shadow-2xl p-5 sm:p-10 full-height-mobile overflow-hidden">
        <WizardSteps :active_state="active"></WizardSteps>

        <div class="flex flex-col justify-between -mt-5 sm:mt-0" style="height:523px;">
            <div v-if="pageLoad" class="absolute left-0 right-0 top-0 bottom-0 w-full h-full bg-white rounded-lg flex items-center justify-center z-50">
                <span class="material-icons form-spin animate-spin text-9xl">data_usage</span>
            </div>

            <div class="flex flex-col lg:flex-row mt-6 mr-8">
                <div class="w-full lg:w-1/2 ltr:pr-10 rtl:pl-10 mt-3">
                <div class="relative z-10 max-w-screen-xl px-4  pb-20 pt-10 sm:py-24 mx-auto sm:px-6 lg:px-8">
                    <div class="max-w-xl sm:mt-1 mt-80 space-y-8 text-center sm:text-right sm:ml-auto">
                    <h2 class="text-4xl font-bold sm:text-5xl">
                        Ustvarite
                        <span class="hidden sm:block text-4xl">
                            svoj prvi račun
                        </span>
                    </h2>

                    <base-button class="btn inline-flex items-center justify-center px-6 py-3 text-base disabled:opacity-50 relative mt-5 mx-auto bg-purple hover:bg-purple-700 disabled:bg-purple-700 text-white rounded-md py-3 px-5 font-semibold" @click="finish()">
                    Naprej
                    </base-button>
                    </div>


                </div>
                </div>

                <div class="absolute w-1/2 right-0 ltr:pl-10 rtl:pr-10 mt-3 hidden lg:flex lg:flex-col">
                    <div class="absolute inset-0 w-full sm:my-20 sm:pt-1 pt-12 h-full ">
                    <img :src="image_src" class="absolute top-12 ltr:right-2 rtl:left-2 w-10/12 p-3 -mt-12" alt="Akaunting" />
                </div>

                    <!-- <div class="flex">
                        <base-button
                            class="relative rtl:right-20 flex items-center justify-center text-base rounded-lg m-auto mt-96 hover:underline py-1.5 -right-20 font-semibold disabled:bg-gray-100 "
                            :disabled="anchor_loading"
                            @click="finish()"
                            style="top: 5.9rem"
                        >
                            <i v-if="anchor_loading" class="animate-submit_second delay-[0.28s] absolute w-2 h-2 rounded-full left-0 right-0 -top-2.5 m-auto before:absolute before:w-2 before:h-2 before:rounded-full before:animate-submit_second before:delay-[0.14s] after:absolute after:w-2 after:h-2 after:rounded-full after:animate-submit_second before:-left-3.5 after:-right-3.5 after:delay-[0.42s]"></i>

                            <span :class="[{'opacity-0': anchor_loading}]">
                                {{ translations.company.skip }}
                            </span>
                        </base-button>
                        <base-button
                            class="relative ltr:-right-2 rtl:-left-2 flex items-center justify-center text-base rounded-lg m-auto mt-96 bg-purple hover:bg-purple-700 disabled:bg-purple-700 text-white py-1.5 px-7 font-medium"
                            :disabled="anchor_loading"
                            @click="finish()"
                            style="top: 5.9rem;"
                        >
                            <i v-if="anchor_loading" class="animate-submit_second delay-[0.28s] absolute w-2 h-2 rounded-full left-0 right-0 -top-2.5 m-auto before:absolute before:w-2 before:h-2 before:rounded-full before:animate-submit_second before:delay-[0.14s] after:absolute after:w-2 after:h-2 after:rounded-full after:animate-submit_second before:-left-3.5 after:-right-3.5 after:delay-[0.42s]"></i>

                            <span :class="[{'opacity-0': anchor_loading}]">
                                {{ translations.finish.create_first_invoice }}
                            </span>
                        </base-button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import WizardSteps from "./Steps.vue";

export default {
    name: "Finish",

    components: {
        WizardSteps
    },

    props: {
        modules: {
            type: [Object, Array],
        },

        translations: {
            type: [Object, Array],
        },

        pageLoad: {
          type: [Boolean, String]
        }
    },

    data() {
        return {
            active: 3,
            route_url: url,
            image_src: app_url + "/public/img/wizard-rocket.gif",
            anchor_loading: false
        };
    },

    created() {
        window.axios({
            method: "PATCH",
            url: url + "/wizard/finish",
        })
        .then((response) => {
        })
        .catch((error) => {
            this.$notify({
                verticalAlign: 'bottom',
                horizontalAlign: 'left',
                message: this.translations.finish.error_message,
                timeout: 1000,
                icon: "",
                type: 0
            });

            this.prev();
        });
    },

    methods: {
        prev() {
            if (this.active-- > 2);

            this.$router.push("/wizard/currencies");
        },

        finish() {
            window.location.href = url + "/sales/invoices/create";
            this.anchor_loading = true;
        },
    },
};
</script>

<style scoped>
    .sliding-app:hover {
        animation: slidingAnimation 600ms ease-out forwards;
    }

    @keyframes slidingAnimation {
        0% { transform: translateX(0); }
        40% { transform: translateX(36px); }
        60% { transform: translateX(24px); }
        80% { transform: translateX(30px); }
        100% { transform: translateX(24px); }
    }

    @media only screen and (max-width: 991px) {
        [modal-container] {
            height: 100% !important;
        }

        .scroll{
            height:450px;
        }
    }
</style>
