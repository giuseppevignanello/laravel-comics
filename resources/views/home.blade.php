@extends('layout.app')
@section('title', 'Homepage')


@section('content')
<div class="comics">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-6 g-4 py-4">

            @foreach ($comics as $comic)
            <div class="comic">
                <div class="comicImage">
                    <img src="{{$comic['thumb']}}">
                </div>
                <div class="text-center text-white"> {{$comic['title']}} </div>
            </div>
            @endforeach

            <button type="button" class="btn btn-primary mt-5 m-auto rounded-0">LOAD MORE</button>
        </div>

    </div>
</div>

<div class="banner">
    <div class="container ">
        <div class="row row-cols-6 align-items-center justify-content-center py-4">
            <div class="bannerIcon">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="" class="h-100">
                <span class="text-white ms-3">Prova</span>
            </div>
            <div class="bannerIcon">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="" class="h-100">
                <span class="text-white ms-3">Prova</span>
            </div>
            <div class="bannerIcon">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="" class="h-100">
                <span class="text-white ms-3">Prova</span>
            </div>
            <div class="bannerIcon">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="" class="h-100">
                <span class="text-white ms-3">Prova</span>
            </div>

        </div>
    </div>

    @endsection



    </html>