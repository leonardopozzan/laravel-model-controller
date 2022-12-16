
@extends('layout.app')

@section('content')
<div class="cards">
    @foreach ($movies as $key => $movie)
        <div class="my-card">
            <div class="img-box"><img src="{{$movie->image}}"></div>
            <div class="description">
                <div class="title">
                    {{$movie->title}}
                </div>
                <div class="pb-1 fst-italic">
                    {{$movie->original_title}}
                </div>
                <div class="pb-1">
                    Data di uscita {{$movie->date}}
                </div>
                <div>
                    Voto: {{$movie->vote}}
                </div>
                <div class="plot">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, quidem sit. Magnam atque aperiam explicabo assumenda unde exercitationem, neque odit aspernatur modi temporibus suscipit impedit excepturi rerum eos esse iure?
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection