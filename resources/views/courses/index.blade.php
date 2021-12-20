@extends('layouts.app')
@section('content')
<div class="container">
    <form class="form-inline row justify-content-md-center">
        <div class="form-group col-md-3">
            <input class="form-control" list="specOptions" id="speciality" placeholder="Speciality">
            <datalist id="specOptions">
                <option value="Informatique">
                <option value="Math">
                <option value="Biologie">
                <option value="Medecine">
                <option value="Design">
            </datalist>
        </div>
        <div class="form-group col-md-3">
            <input type="text" class="form-control" id="course" placeholder="Course">
        </div>
        <div class="form-group col-md-3">
            <input class="form-control" list="levelOptions" id="level" placeholder="Level">
            <datalist id="levelOptions">
                <option value="Level 1">
                <option value="Level 2">
                <option value="Level 3">
            </datalist>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-filter rounded-pill btn-secondary"><i class="fas fa-search"></i> &nbsp; Search</button>
        </div>
    </form>
    <div class="row g-3">
        @foreach($courses as $course)
        <div class="col-md-3 course">
            <div class="card shadow-sm">
                <a class="image-wrapper container" href="/courses/{{$course->url}}">
                    <img src="/img/courses/{{$course->image}}" alt="student" class="card-img img-fluid">
                    <i class="play far fa-play-circle"></i>
                </a>
                <div class="card-body">
                    <div class="info">
                        <h4 class="card-title">{{$course->name}}</h4>
                        <div class="tags">
                            @foreach($course->specialities as $spec)
                            <h6 class="tag"><a href="/specialities/{{$spec->url}}"><span class="badge rounded-pill bg-purple">#{{$spec->name}}</span></a></h6>
                            @endforeach
                        </div>
                    </div>
                    <p class="card-text">{{$course->description}}</p>
                    <div class="d-flex justify-content-around align-items-center">
                        <a type="button" class="btn btn-sm rounded-pill btn-secondary start" href="/courses/{{$course->url}}">Start Course &nbsp; <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<style>
    .card-text {
        height: 72px;
    }
    .tags {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .tag {
        margin-right: 5px;
    }
    .badge {
        border: 1px solid var(--bs-purple);
    }
    .badge:hover {
        background-color: white !important;
        border: 1px solid var(--bs-purple);
        color: var(--bs-purple);
    }
    .btn.start {
        padding-left: 15px;
        padding-right: 15px;
        border: 2px solid var(--bs-coral);
        font-weight: bold;
    }
    .btn.start:hover {
        color: var(--bs-coral);
        background-color: white;
    }
    .image-wrapper {
        background-color: black;
        padding: 0;
        position: relative;
    }
    .play {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        font-size: 60px;
        color: white;
        top: 50%;
        right: 30%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }
    .image-wrapper:hover .play{
        opacity: 1;
    }
    .image-wrapper:hover .card-img {
        opacity: 0.4;
    }
    .btn-filter {
        width: 100%;
        border: 2px solid var(--bs-coral);
        font-weight: bold;
    }
    .btn-filter:hover {
        background-color: white;
        color: var(--bs-coral);
        border: 2px solid var(--bs-coral);
    }
    .form-inline {
        margin: 125px 30px 60px 30px;
        padding: 30px;
        /*border: 2px dashed var(--bs-purple);*/
        border-radius: 100px;
        box-shadow: 0 .15rem .5rem rgba(0,0,0,.15)!important;
    }
    input {
        border-radius: unset !important;
        border-top: unset !important;
        border-left: unset !important;
        border-right: unset !important;
        border-bottom: solid 1.5px var(--bs-purple) !important;
    }
    input:focus {
        box-shadow: unset !important;
        border-bottom: solid 1.5px var(--bs-coral) !important;
    }
</style>
@stop