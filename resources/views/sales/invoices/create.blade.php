<x-layouts.admin>
    <x-slot name="title">
        Nov Račun
    </x-slot>

    <x-slot name="favorite"
        title="Nov Račun"
        icon="description"
        route="invoices.create"
    ></x-slot>

    <x-slot name="content">
        <x-documents.form.content type="invoice" />
    </x-slot>

    <x-documents.script type="invoice" />
</x-layouts.admin>
