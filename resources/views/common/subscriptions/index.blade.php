<x-layouts.admin>
    <x-slot name="title">{{ trans_choice('general.plans', 1) }}</x-slot>


    <x-slot name="content">
        <script async src="https://js.stripe.com/v3/pricing-table.js"></script>
        <stripe-pricing-table pricing-table-id="prctbl_1MvnCnKaKNvt1MSKsRtjaELH"
                              publishable-key="pk_test_51MZcOeKaKNvt1MSKuwL0OtAEFq9O6FbzUKIMPRLmcbdSzXHR2cPwnzddFwGjgtR1dRf9TVLwCY108npOyexU9hXI00vsylJcZy">
        </stripe-pricing-table>
    </x-slot>

    <x-script folder="common" file="reports" />
</x-layouts.admin>
