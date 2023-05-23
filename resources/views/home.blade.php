@extends('layout.app')
@section('title', 'Homepage')


@section('content')

<div class="container">
    <div class="row">

        @foreach ($comics as $comic)

        <div> {{$comic['title']}} </div>
        @endforeach
    </div>

</div>

@endsection

</html>