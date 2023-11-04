<template>
    <div class="relative bg-body z-10 rounded-lg shadow-2xl p-5 sm:p-10 full-height-mobile" style="height:675px;">
        <WizardSteps :active_state="active"></WizardSteps>

        <div class="flex flex-col justify-between -mt-5 sm:mt-0" style="height: calc(100% - 53px)">
            <div v-if="pageLoad" class="absolute inset-0 w-full h-full bg-white rounded-lg flex items-center justify-center z-50">
                <span class="material-icons form-spin animate-spin text-9xl">data_usage</span>
            </div>

            <div class="overflow-x-visible overflow-y-auto menu-scroll mt-1">
                <form ref="form" class="py-2 align-middle inline-block min-w-full">
                    <div class="relative">
                        <div v-if="pageLoad" class="absolute left-0 right-0 top-0 bottom-0 w-full h-full bg-white rounded-lg flex items-center justify-center z-50">
                            <span class="material-icons form-spin animate-spin text-9xl">data_usage</span>
                        </div>

                        <div class="flex flex-col justify-between -mt-5 sm:mt-0">
                            <div class="grid sm:grid-cols-6 gap-x-8 gap-y-6 my-3.5 menu-scroll gap-10">
                                    <div class="sm:col-span-3">
                                        <base-input not-required :label="translations.company.accounting" :error="onFailErrorGet('country')">
                                            <el-select v-model="accountant" filterable>
                                                <el-option
                                                    v-for="(accountant, index) in accountants"
                                                    :key="index"
                                                    :label="accountant.name"
                                                    :value="accountant.id"
                                                >
                                                </el-option>
                                            </el-select>
                                        </base-input>

                                        <input name="accountant" type="hidden" class="d-none" v-model="accountant">
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="flex items-center justify-center mt-5 gap-x-10">
                <base-button class="w-1/2  flex items-center justify-center px-6 py-1.5 text-base rounded-lg bg-transparent hover:bg-gray-100" @click="next()">
                    {{ translations.company.skip }}
                </base-button>

                <button
                    type="submit"
                    id="button"
                    :disabled="button_loading_company"
                    class="w-1/2 relative flex items-center justify-center bg-green hover:bg-green-700 text-white px-6 py-1.5 text-base rounded-lg disabled:bg-purple-700"
                    @click="onEditSave($event)"
                >
                    <i v-if="button_loading_company" class="animate-submit delay-[0.28s] absolute w-2 h-2 rounded-full left-0 right-0 -top-3.5 m-auto before:absolute before:w-2 before:h-2 before:rounded-full before:animate-submit before:delay-[0.14s] after:absolute after:w-2 after:h-2 after:rounded-full after:animate-submit before:-left-3.5 after:-right-3.5 after:delay-[0.42s]"></i>
                    <span :class="[{'opacity-0': button_loading_company}]">
                        {{ translations.company.save }}
                    </span>
                </button>
            </div>
        </div>

        <form id="form-dynamic-component" method="POST" action="#"></form>

        <component v-bind:is="component" @deleted="onDeleteCurrency($event)"></component>

        <notifications></notifications>
    </div>
</template>
<script>
    import { Select, Option } from "element-ui";
    import AkauntingDropzoneFileUpload from "./../../components/AkauntingDropzoneFileUpload";
    import AkauntingDate from "./../../components/AkauntingDate";
    import WizardAction from "./../../mixins/wizardAction";
    import WizardSteps from "./Steps.vue";

export default {
    name: "Accountants",

    mixins: [
        WizardAction
    ],

    components: {
        [Select.name]: Select,
        [Option.name]: Option,
        WizardSteps
    },

    props: {
            company: {
                type: [Object, Array],
            },

            accountants: {
                type: [Object, Array],
            },

            countries: {
                type: [Object, Array],
            },

            translations: {
                type: [Object, Array],
            },

            url: {
                type: String,
                default: "text",
            },

            pageLoad: {
                type: [Boolean, String]
            },

            locale: {
                type: String,
            },

            dateConfig: {
                type: Object,
                default: function () {
                    return {

                    };
                },
                description: "FlatPckr date configuration"
            },
        },

        data() {
            return {
                active: 1,
                logo: [],
                accountant: "",
                real_date: "",
                lang_data: '',
                sorted_countries: [],
                button_loading_company: false
            };
        },

    mounted() {
        let company_data = this.company;

        this.onDataWatch(company_data);
    },

    methods: {
        sortBy(option) {
            return (firstEl, secondEl) => {
                let first_element = firstEl[option].toUpperCase(); // ignore upper and lowercase
                let second_element = secondEl[option].toUpperCase(); // ignore upper and lowercase

                if (first_element < second_element) {
                    return -1;
                }

                if (first_element > second_element) {
                    return 1;
                }

                // names must be equal
                return 0;
            }
        },


        onEditSave(event) {
            event.preventDefault();

            this.button_loading_company = true;

            FormData.prototype.appendRecursive = function (data, wrapper = null) {
                for (var name in data) {
                    if (name == "previewElement" || name == "previewTemplate") {
                        continue;
                    }

                    if (wrapper) {
                        if (
                        (typeof data[name] == "object" || Array.isArray(data[name])) &&
                        data[name] instanceof File != true &&
                        data[name] instanceof Blob != true
                        ) {
                            this.appendRecursive(data[name], wrapper + "[" + name + "]");
                        } else {
                            this.append(wrapper + "[" + name + "]", data[name]);
                        }
                    } else {
                        if (
                        (typeof data[name] == "object" || Array.isArray(data[name])) &&
                        data[name] instanceof File != true &&
                        data[name] instanceof Blob != true
                        ) {
                            this.appendRecursive(data[name], name);
                        } else {
                            this.append(name, data[name]);
                        }
                    }
                }
            };

            const formData = new FormData(this.$refs["form"]);

            let data_name = {};

            for (let [key, val] of formData.entries()) {
                Object.assign(data_name, {
                    [key]: val,
                });
            }

            Object.assign(data_name, {
                ["_prefix"]: "company",
                ["_token"]: window.Laravel.csrfToken,
                ["_method"]: "POST",
            });

            formData.appendRecursive(data_name);

            window.axios({
                method: "POST",
                url: url + "/wizard/accountants",
                data: formData,
                headers: {
                    "X-CSRF-TOKEN": window.Laravel.csrfToken,
                    "X-Requested-With": "XMLHttpRequest",
                    "Content-Type": "multipart/form-data",
                },
            })
            .then((response) => {
                this.onSuccessMessage(response);

                this.$router.push("/wizard/currencies");
                this.button_loading_company = false;
            }, this)
            .catch((error) => {
                this.onFailError(error);
                this.button_loading_company = false;
            }, this);
        },

        next() {
            if (this.active++ > 2);

            this.$router.push("/wizard/currencies");
        },
    },

    watch: {
        company: function (company) {
            this.onDataWatch(company);
        },
    },
};
</script>
