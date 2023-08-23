
<x-layouts.admin>
    <x-slot name="title">
        {{ trans('general.title.new', ['type' => setting('bill.title', trans_choice('general.bills', 2))]) }}
    </x-slot>

    <x-slot name="favorite"
        title="{{ trans('general.title.new', ['type' => setting('bill.title', trans_choice('general.bills', 2))]) }}"
        icon="file_open"
        route="bills.create"
    ></x-slot>

    <x-slot name="content">
        <x-documents.form.content
            type="bill"
            hide-company
            hide-footer
            hide-edit-item-columns
            hide-send-to
            is-purchase-price
        />
    </x-slot>

    <x-documents.script type="bill" />
</x-layouts.admin>
