@extends('layout')

@section('title', 'Giant Book Supplier - Home')

@section('content')
    <div class=”title”> Book List </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($books as $book)
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
@endsection
