@extends('layout')

@section('content')
    <div class=”title”> Book Detail </div>
    <br>

    <div class="card card-detail">
        <img src="{{ asset('Storage/'.$book->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title">Title : {{$book->title}}</h2>
            <h5 class="card-text"> Author : {{$book->author}}</h5>
            <h5 class="card-text"> Publisher : {{$book->publisher->name}}</h5>
            <h5 class="card-text"> Year : {{$book->year}}</h5>
            <h5 class="card-text"> Synopsis : </h5>
            <p class="card-text"> {{$book->synopsis}}</p>
        </div>
    </div>
@endsection
