@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')

    <div class="my-jumbotron"></div>

    <div class="container">
        <h1>
            CURRENT SERIES
        </h1>

        <div class="d-flex justify-content-center">
            <div class="row g-0 flex-wrap justify-content-center ">
                @foreach($comics as $comic)
                    <div class="comic-card col-2">
                        <div class="my-comic">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
                        <div class="info">
                            {{ strtoupper($comic['series']) }}
                        </div>
                    </div>
                @endforeach
            </div>

            <button>LOAD MORE</button>
        </div>
    </div>

@endsection
