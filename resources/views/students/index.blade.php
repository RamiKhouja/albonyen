@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row g-3">
        @foreach($students as $student)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card shadow-sm">
                <img src="/img/students/{{$student->image}}" alt="student" class="card-img img-fluid">
                <div class="card-body">
                    <div class="info">
                        <h5 class="card-title">{{$student->first_name}} {{$student->last_name}}</h5>
                        <h6 class="primary-text">Student in {{$student->field}}</h6>
                    </div>
                    <p class="card-text">{{implode(' ', array_slice(explode(' ', $student->description), 0, 20))}} ...</p>
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
                            <p class="amount-txt secondary-text">/ {{$student->amount}} DT</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around align-items-center">
                        <a type="button" class="btn rounded-pill btn-outline-coral" href="/students/{{$student->id}}">Details</a>
                        <button type="button" class="btn rounded-pill btn-primary">Donate</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<style>
    .info{
        margin: 20px 0;
        text-align: center;
    }
    .card-text {
        text-align: justify;
        padding: 0 20px;
        margin-bottom: 25px;
    }
</style>
@stop