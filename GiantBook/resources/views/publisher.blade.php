@extends('layout')

@section('title', 'Giant Book Supplier - Publisher')

@section('content')
    @foreach($publishers as $publisher)
    <div class=”title-publisher”>
        <div class="row publisher-container">
            <div class="col-3 d-flex">
                <img src="{{ asset('Storage/'.$publisher->image) }}" class = "publisher-logo" alt="..." height="200px" width="200px">
            </div>
            <div class="col-9">
                <div class="publisher-content">
                    <h3> {{$publisher->name}} </h3>
                </div>
                <div class="publisher-content">
                    <h4> Address - {{$publisher->address}}</h4>
                </div>
                <div class="publisher-content">
                    <h4> Phone - {{$publisher->phone}}</h4>
                </div>
                <div class="publisher-content">
                    <h4> Email - {{$publisher->email}}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($publisher->book as $book)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('Storage/'.$book->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$book->title}}</h5>
                        <p class="card-text">by</p>
                        <h6 class="card-title">{{$book->author}}</h6>
                        <br>
                        <a href="{{url('detail', ['id'=>$book->id])}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endforeach
@endsection
