@extends('layout')

@section('title', 'Giant Book Supplier - Category')

@section('content')
    <div class=”title”> {{$category->name}} </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($category->book as $i)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('Storage/'.$i->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$i->title}}</h5>
                        <p class="card-text">by</p>
                        <h6 class="card-title">{{$i->author}}</h6>
                        <br>
                        <a href="{{url('detail', ['id'=>$i->id])}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
