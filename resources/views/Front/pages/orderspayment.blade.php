@extends('Layouts.default')
@section('content')

<style>
    .accordion_orderspayments {
        background-color: #f9f9f9;
        color: #333;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        transition: 0.4s;
    }

    .accordion.active, .accordion:hover {
        background-color: #ddd;
    }

    .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    /* New style */
    .faq-heading {
        text-align: center;
    }
</style>

<!-- New h2 heading -->
<h2 class="faq-heading" style="margin-top: 40px;">Orders & Payments - FAQ's</h2>

<div class="contactFormContainer container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
            <div id="accordion">
                <div class="accordion">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Canceling Your Subscription
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <p>Canceling a subscription is a straightforward process that can be done through our support platform. We understand that circumstances change, and we want to make the cancellation process as smooth as possible for our users. In this article, we'll guide you through the steps to cancel your subscription with ease.
                            <br><br>
                            <b>Canceling a Subscription:</b>
                            <br><br>
                            To cancel any of your subscriptions and halt recurring charges, please follow these steps:
                            <br><br>
                            <b>Step 1: Contact Us</b>
                            <br>
                            Simply send us a message over chat asking to cancel your subscription or submit a request. Including your Order Number will expedite the processing of your cancellation request.
                            <br><br>
                            <b>Addressing Late Charges:</b>
                            <br>
                            If you realize you've been charged a monthly subscription fee and wish to cancel, we understand your concern. Unfortunately, late cancellation requests won't be eligible for a refund. However, our Customer Support team is here to assist you in scheduling a cancellation before your next payment date. This way, you can still enjoy the content you've paid for without incurring additional charges.
                            <br><br>
                            <b>Common Questions:</b>
                            <br>
                            1. <b>Will I receive a refund?</b> Refund policies vary depending on the subscription type and the terms of service. If you have any questions about refunds, please refer to our Refund Policy or contact our Customer Support team for assistance.
                            2. <b>Can I cancel at any time?</b> Subscriptions can be canceled at any time.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Refund Policy
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <p>We want you to be completely satisfied with your purchase. If you have any concerns about your order, please take a moment to read our refund policy below to understand your options.
                            <br>
                            <h5>Refund Period</h5>
                            <br>
                            Refunds are available for a period of 60 days from the date of purchase. If 60 days have passed since your purchase, we, unfortunately, cannot offer you a refund.
                            <br><br>
                            <h5>Eligibility for Refunds</h5>
                            <br>
                            If your item is physical, your item must be in the same condition that you received it. It must also be in the original packaging.
                            <br><br>
                            <h5>Refund Process</h5>
                            <b>Digital Products</b>
                            <br><br>
                            <b>Initiating a Refund:</b> To initiate a refund, please reach out to us on Chat or submit a ticket via our Contact Form within the 60-day refund period. You will be asked to provide your name, email, order number and a detailed reason for your refund request.
                            <br><br>
                            <p style="color: red;">Important: Please be aware that Astrology Answers does not cover or refund shipping charges.</p>
                            <h5>Refund Approval</h5>
                            If your return is approved, your refund will be processed, and a credit will be applied to your original method of payment within 5-10 business days. The time it takes for the refund to appear in your account may vary depending on your financial institution.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var accordions = document.querySelectorAll('.accordion');
    accordions.forEach(function (accordion) {
        accordion.addEventListener('click', function () {
            // Close all other open accordions
            accordions.forEach(function (otherAccordion) {
                if (otherAccordion !== accordion) {
                    otherAccordion.classList.remove('show');
                }
            });
        });
    });
</script>

@stop