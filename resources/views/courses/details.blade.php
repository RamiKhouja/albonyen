@extends('layouts.app')
@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="primary-text">Home</a></li>
            <li class="breadcrumb-item"><a href="/courses" class="primary-text">Courses</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span class="secondary-text">{{$course->name}}</span></li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8 row">
            <div class="col-md-4">
                <img src="/img/courses/{{$course->image}}" class="img img-fluid" width="100%" alt="{{$course->name}}">
            </div>
            <div class="col-md-8">
                <h1 class="primary-text">{{$course->name}}</h1>
                <p>{{$course->description}}</p>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="lessons-title">Watch the {{$course->name}} lessons:</h3>
            @foreach($lessons as $lesson)
                <a class="row lesson shadow-sm mb-4 bg-white" href="/courses/{{$course->url}}/{{$lesson->id}}">
                    <div class="col-md-5 wrapper">
                        <div class="lesson-img-wrapper container">
                            <img src="/img/courses/{{$lesson->image}}" title="{{$lesson->name}}" class="img-fluid lesson-img" alt="{{$lesson->name}}">
                            <i class="play far fa-play-circle"></i>
                        </div>
                    </div>
                    <div class="col-md-7 lesson-text">
                        @if(strlen($lesson->name) > 24)
                        <h6 class="lesson-title primary-text">{{substr($lesson->name,0,24)}}...</h6>
                        @else
                        <h6 class="lesson-title primary-text">{{$lesson->name}}</h6>
                        @endif
                        <p class="lesson-nb"><b>Lesson {{$lesson->id}}</b></p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
<style>
    .breadcrumb{
        margin-bottom: 20px;
    }
    .breadcrumb a {
        text-decoration: unset !important;
    }
    .breadcrumb a:hover {
        color: var(--bs-coral);
    }
    .lessons-title {
        margin-bottom: 30px;
    }
    .lesson {
        margin-right: 0;
        margin-left: 0;
        text-decoration: unset !important;
    }
    .lesson-text {
        padding: 10px;
    }
    .wrapper {
        padding: 0 !important;
    }
    .lesson-img-wrapper {
        padding: 0 !important;
        background-color: black;
        position: relative;
    }
    .play {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        font-size: 40px;
        color: white;
        top: 50%;
        right: 30%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }
    .lesson:hover .play{
        opacity: 1;
    }
    .lesson:hover .lesson-img {
        opacity: 0.4;
    }
    .lesson:hover .lesson-title {
        color: var(--bs-coral);
    }
    .lesson-nb {
        color: #555 !important;
    }
</style>
@stop