@extends('layouts.admin')
@section('content')
<div class="checkout_sponsorship_container">

    <div class="header_checkout">

        <h3>Completa il pagamento per sponsorizzare la tua struttura</h3>
            
    </div>

    <div class="main_checkout">

        <div class="summary_checkout">

            <ul>

                <li>
                    <p>
                        <i class="fa-solid fa-house-chimney"></i><b> Struttura:</b> {{ $apartment->title }}
                    </p>
                </li>
                <li>
                    <p>
                        <i class="fa-solid fa-hand-holding-dollar"></i><b> Piano:</b> {{ $sponsorship->name }}
                    </p>
                </li>
                <li>
                    <p>
                        <i class="fa-solid fa-stopwatch"></i><b> Durata piano:</b> {{ $sponsorship->duration }} ore
                    </p>
                </li>
                <li>
                    <p>
                        <i class="fa-solid fa-coins"></i><b> Prezzo:</b> € {{ $sponsorship->price }}
                    </p>
                </li>

            </ul>

        </div>
        
        <div class="payment_container">

            <form id="payment-form"
                action="{{ route('admin.sponsorships.store', ['apartment' => $apartment->id, 'sponsorship' => $sponsorship->id]) }}"
                method="POST">
                @csrf
                <!-- Putting the empty container you plan to pass to
                `braintree.dropin.create` inside a form will make layout and flow
                easier to manage -->
                <div id="dropin-container"></div>
                <input type="submit"/>
                <input class="btn my-btn text-right" type="hidden" id="nonce" name="payment_method_nonce" />
            </form>
            <script>
                const form = document.getElementById('payment-form');

                braintree.dropin.create({
                authorization: 'sandbox_zj99df8d_s9n9bbsj2fhg9kj5',
                container: '#dropin-container'
                }, (error, dropinInstance) => {
                if (error) console.error(error);

                form.addEventListener('submit', event => {
                    event.preventDefault();

                    dropinInstance.requestPaymentMethod((error, payload) => {
                    if (error) console.error(error);

                    // Step four: when the user is ready to complete their
                    //   transaction, use the dropinInstance to get a payment
                    //   method nonce for the user's selected payment method, then add
                    //   it a the hidden field before submitting the complete form to
                    //   a server-side integration
                    document.getElementById('nonce').value = payload.nonce;
                    form.submit();
                    });
                });
                });
            </script>

        </div>

    </div>

</div>
    {{-- <div class="container">
        <div class="row g-4">
            <div class="col-12">
                <div class="py-4">
                    <h1 class="text-uppercase">
                        Pay your sponsorship
                    </h1>
                    <h6 class="fs-5 pb-3">
                        Pay in security your best sponsorship.
                    </h6>
                </div>
                <h5>
                    You are buying the <span class="fw-bold">"{{ $sponsorship->name }} sponsorship"</span> for the apartment
                    <span class="fw-bold">"{{ $apartment->title }}"</span>
                    with total price: <span class="fw-bold" id="sponsorship-price">&euro;
                        {{ $sponsorship->price }}</span>
                </h5>
                <form id="payment-form"
                    action="{{ route('admin.sponsorships.store', ['apartment' => $apartment->id, 'sponsorship' => $sponsorship->id]) }}"
                    method="POST">
                    @csrf
                    <!-- Putting the empty container you plan to pass to
                    `braintree.dropin.create` inside a form will make layout and flow
                    easier to manage -->
                    <div id="dropin-container"></div>
                    <input class="btn my-btn text-right" type="submit" />
                    <input class="btn my-btn text-right" type="hidden" id="nonce" name="payment_method_nonce" />
                </form>
                <script>
                    const form = document.getElementById('payment-form');

                    braintree.dropin.create({
                    authorization: 'sandbox_zj99df8d_s9n9bbsj2fhg9kj5',
                    container: '#dropin-container'
                    }, (error, dropinInstance) => {
                    if (error) console.error(error);

                    form.addEventListener('submit', event => {
                        event.preventDefault();

                        dropinInstance.requestPaymentMethod((error, payload) => {
                        if (error) console.error(error);

                        // Step four: when the user is ready to complete their
                        //   transaction, use the dropinInstance to get a payment
                        //   method nonce for the user's selected payment method, then add
                        //   it a the hidden field before submitting the complete form to
                        //   a server-side integration
                        document.getElementById('nonce').value = payload.nonce;
                        form.submit();
                        });
                    });
                    });
                </script>
            </div>
        </div>
    </div> --}}
@endsection