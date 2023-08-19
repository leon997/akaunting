<x-layouts.admin>
    <x-slot name="title">Naročnina</x-slot>

    <x-slot name="content">
        <div class="container mt-10 h-screen">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                        </div>

                        <div class="card-body">
                            <form id="payment-form" method="POST" action="{{ route("subscribe.post") }}">
                                @csrf
                                <div class="mt-4">
                                    <input type="radio" name="plan" id="standard" value="price_1NESG9KaKNvt1MSKiEclXH1p" checked>
                                    <label for="standard">Mesečna naročnina - 5€ / mesec</label><br>

                                    <input type="radio" name="plan" id="premium" value="price_1NESEuKaKNvt1MSK4EKDqHQl">
                                    <label for="premium">Letna naročnina - 45€ / leto</label><br>
                                </div>
                                <div id="payment-element" class="mt-10">
                                    <!--Stripe.js injects the Payment Element-->
                                </div>
                                <button id="btnSubmit" class="bg-purple text-white px-4 py-2 rounded mt-5">
                                    <div class="spinner hidden" id="spinner"></div>
                                    <span id="button-text">Plačaj</span>
                                </button>
                                <div id="payment-message" class="hidden"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.admin>
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe(
        "pk_test_51MZcOeKaKNvt1MSKuwL0OtAEFq9O6FbzUKIMPRLmcbdSzXHR2cPwnzddFwGjgtR1dRf9TVLwCY108npOyexU9hXI00vsylJcZy"
    );

    let elements;

    initialize();

    document
        .querySelector("#payment-form")
        .addEventListener("submit", handleSubmit);

    function initialize() {

        elements = stripe.elements({
            clientSecret: "{{ $intent->client_secret }}"
        });


        const paymentElementOptions = {
            layout: "tabs",
        };

        const paymentElement = elements.create("payment", paymentElementOptions);
        paymentElement.mount("#payment-element");
    }

    async function handleSubmit(e) {
        e.preventDefault();

        const {
            setupIntent,
            error
        } = await stripe.confirmSetup({
            elements,
            confirmParams: {
                // Make sure to change this to your payment completion page
                return_url: "http://localhost:4242/checkout.html",
            },
            redirect: 'if_required'
        });

        // This point will only be reached if there is an immediate error when
        // confirming the payment. Otherwise, your customer will be redirected to
        // your `return_url`. For some payment methods like iDEAL, your customer will
        // be redirected to an intermediate site first to authorize the payment, then
        // redirected to the `return_url`.

        if (error) {

            if (error.type === "card_error" || error.type === "validation_error") {
                showMessage(error.message);
            } else {
                showMessage("An unexpected error occurred.");
            }

            setLoading(false);
        } else {
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'paymentMethod');
            hiddenInput.setAttribute('value', setupIntent.payment_method);
            form.appendChild(hiddenInput);

            //Submit the form
            form.submit();
        }
    }

    function showMessage(messageText) {
        const messageContainer = document.querySelector("#payment-message");

        messageContainer.classList.remove("hidden");
        messageContainer.textContent = messageText;

        setTimeout(function() {
            messageContainer.classList.add("hidden");
            messageText.textContent = "";
        }, 4000);
    }

</script>
