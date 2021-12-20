@extends('layouts.app')
@section('content')
<div class="container">
    <div class="contact-page">
        <div class="col-md-9 col-12 mx-auto card shadow-sm still">
            <div class="contact row">
                <div class="col-md-6 col-12 img-col container">
                    <img src="/img/contact.jpeg" alt="contact us" class="card-img img-fluid">
                    <div class="contact-info">
                        <div class="address row">
                            <div class="address-icon col-2"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="address-info col-10">
                                <h5>Address</h5>
                                <p>12 Av Habib Bourguiba, Tunis</p>
                            </div>
                        </div>
                        <div class="address row">
                            <div class="address-icon col-2"><i class="fas fa-phone-alt"></i></div>
                            <div class="address-info col-10">
                                <h5>Give us a call</h5>
                                <p>+216 23 354 108</p>
                            </div>
                        </div>
                        <div class="address row">
                            <div class="address-icon col-2"><i class="fas fa-envelope"></i></div>
                            <div class="address-info col-10">
                                <h5>Our Email</h5>
                                <p>contact@albonyen.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="contact-form">
                        <h2 class="contact-title">Send us a Message</h2>
                        <form class="form">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="name" placeholder="name">
                                <label for="name"><i class="fas fa-user"></i> &nbsp; Full Name</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="email" placeholder="email">
                                <label for="email"><i class="fas fa-envelope"></i> &nbsp; Email Address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="phone" placeholder="phone">
                                <label for="phone"><i class="fas fa-phone-alt"></i> &nbsp; Phone Number</label>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea class="form-control" id="message" rows="5" placeholder="message"></textarea>
                                <label for="message"><i class="fas fa-envelope-open-text"></i> &nbsp; Your Message</label>
                            </div>
                            <button type="button" class="btn send rounded-pill btn-outline-coral"><i class="fas fa-paper-plane"></i> &nbsp;Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .contact.row, .img-col {
        padding-left : unset !important;
    }
    .img-col {
        padding: unset !important;
        background-color: var(--bs-purple);
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }
    .card-img {
        border-top-right-radius: unset;
        border-bottom-right-radius: unset;
        opacity: 0.2;
    }
    .contact-page {
        margin: 100px 0;
    }
    .contact-info {
        position: absolute;
        top: 50%;
        left: 25%;
        transform: translate(-50%, -50%);
        max-width: 300px;
        color: #FFF;
    }
    .address-icon i {
        font-size: 20px;
        margin-top: 3px;
    }
    .contact-form {
        padding: 50px 20px 50px 50px;
    }
    .contact-title {
        text-align: center
    }
    .form {
        margin-top: 70px
    }
    input, textarea {
        border-radius: unset !important;
        border-top: unset !important;
        border-left: unset !important;
        border-right: unset !important;
        border-bottom: solid 1.5px var(--bs-purple) !important;
    }
    input:focus, textarea:focus {
        box-shadow: unset !important;
        border-bottom: solid 1.5px var(--bs-coral) !important;
    }
    .form-floating .fas {
        color: var(--bs-purple);
    }
    input {
        height: 65px !important;
        padding-top: 35px !important;
    }
    textarea {
        height: 120px !important;
        padding-top: 35px !important;
    }
    .send {
        position: absolute;
        bottom: 30px;
        right: 30px;
        width: 120px;
    }
</style>
@stop