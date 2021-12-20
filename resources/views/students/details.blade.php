@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-12">
            <div class="card shadow container">
                <img src="/img/students/{{$student->image}}" alt="student" class="card-img img-fluid">
                <img src="/img/pin.png" width="100px" class="pin">
            </div>
            <div class="info">
                <h2 class="card-title">{{$student->first_name}} {{$student->last_name}}</h2>
                <h6>{{$student->age}} Years</h6>
                <h5 class="primary-text">Student in {{$student->field}}</h5>
                <div class="amount-progress">
                    <div class="progress">
                        @php
                        $progress=($student->paid / $student->amount) * 100;
                        @endphp
                        <div class="progress-bar progress-bar-striped bg-coral" role="progressbar" style="width: {{$progress}}%" aria-valuenow="{{$progress}}" aria-valuemin="0" aria-valuemax="100">
                            @if ($progress > 25) {{$student->paid}} DT @endif
                        </div>
                    </div>
                    <div class="amount">
                        <h6 class="amount-txt secondary-text">{{$student->paid}} DT / {{$student->amount}} DT</h6>
                    </div>
                </div>
                <div class="donation">
                    <button type="button" class="donate btn rounded-pill btn-primary">Donate</button>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-12 right-info">
            <h3 class="desc-title">About {{$student->first_name}}</h3>
            <p class="description"><i class="fas fa-quote-left"></i>{{$student->description}}<i class="fas fa-quote-right"></i></p>
            <div class="bottom-desc">
                <div class="home-addr">
                    <i class="fas fa-home"></i>
                    <p class="addr">{{$student->city}}</p>
                </div>
                <div class="university-addr">
                    <i class="fas fa-university"></i>
                    <p class="addr">{{$student->university}}</p>
                </div>
            </div>
            <div class="contact">
                <h4 class="contact-title">Want to ask about {{$student->first_name}} ?</h4>
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
<style>
    .card {
        padding: 10px;
        border-radius: 7px !important;
    }
    .card:hover {
        box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
        transition: box-shadow 0.2s ease-in-out !important;
    }
    .pin {
        position: absolute;
        bottom: 7px;
        right: -28px;
    }
    .info {
        margin-top: 30px;
        text-align: center;
    }
    .amount-progress {
        margin-top: 30px;
    }
    .right-info {
        padding: 10px 50px;
    }
    .desc-title {
        margin-bottom: 20px;
    }
    .fa-quote-left {
        margin-right: 20px;
        font-size: 24px;
        color: var(--bs-purple);
        vertical-align: super;
    }
    .fa-quote-right {
        margin-left: 20px;
        font-size: 24px;
        color: var(--bs-purple);
        vertical-align: text-top;
    }
    .bottom-desc {
        margin-top: 30px;
    }
    .bottom-desc i {
        color: var(--bs-coral);
        font-size: 22px;
    }
    .home-addr, .university-addr {
        display: flex;
    }
    .addr {
        margin-left: 20px;
        font-weight: bold;
    }
    .contact {
        border: 2px dashed var(--bs-purple);
        padding: 50px;
        margin: 50px;
        border-radius: 7px;
    }
    h4.contact-title {
        text-align: center;
        color: #555;
        margin-bottom: 30px;
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
        margin-top: 30px;
        width: 120px;
    }
    .donation {
        margin-top: 50px;
    }
    .donate {
        width: 100%;
    }
</style>
@stop