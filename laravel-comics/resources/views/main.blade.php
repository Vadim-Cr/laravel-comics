@extends('layouts.aggregator')


@section ('content')
    <h1 class="container text-center"> 
       DC COMICS
    </h1>
    <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    @foreach ($fumetti as $fumetto)
        <div class="card p-3 my-3">
            <h3 class="bg-dark text-light p-2">
            {{$fumetto['title']}}
            </h3>
            <p>
            {{$fumetto['description']}}
            </p>
            <div class="column justify-content-between d-flex">
                <span class="bg-dark text-light p-2">
                    {{$fumetto['price']}}
                </span>
                <span class="bg-dark text-light p-2">
                    {{$fumetto['series']}}
                </span>
                <span class="bg-dark text-light p-2">
                    {{$fumetto['type']}}
                </span>
            </div>
            <div class="column justify-content-around d-flex">
                <div class="m-4">
                    <h4>ARTISTS</h4>
                    <ul>
                        @foreach ($fumetto['artists'] as $artist)
                        <li>
                            {{$artist}}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="m-4">
                    <h4>WRITERS</h4>
                    <ul>
                        @foreach ($fumetto['writers'] as $writer)
                        <li>
                            {{$writer}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
@endsection