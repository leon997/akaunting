<x-layouts.admin>
    <x-slot name="title">{{ trans_choice('general.plans', 2) }}</x-slot>

    <x-slot name="favorite"
        title="{{ trans_choice('general.plans', 2) }}"
        icon="donut_small"
        route="plans.index"
    ></x-slot>



    <x-slot name="content">
        <h1>Hellow</h1>
    </x-slot>

    <x-script folder="common" file="reports" />
</x-layouts.admin>
