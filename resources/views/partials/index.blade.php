@extends('layout.home')

@section('content')
<div class="container">
    <h1 class="titleHeader">Tutti i Comics</h1>
</div>
<div class="container">
    <div class="contTab">
        <div class="titleTab"> <h3>Titolo</h3>  </div>
        <div class="titleTab"><h3>Serie</h3>   </div>
        <div class="titleTab"> <h3>Prezzo</h3>  </div>
        <div class="titleTab"> <h3>Data Uscita</h3>  </div>
        <div class="titleTab"> <h3>Tipologia</h3>  </div>
        <div class="titleTab"> <h3>Guarda</h3>  </div>
        <div class="titleTab"> <h3>Modifica</h3>  </div>
    </div>
</div>
<div class="container">
    @foreach($comics as $comic)
    <div class="contComics">
        <div class="listComics"> {{$comic['title']}} </div>
        <div class="listComics"> {{$comic['series']}} </div>
        <div class="listComics"> {{$comic['price']}} </div>
        <div class="listComics"> {{$comic['sale_date']}} </div>
        <div class="listComics"> {{$comic['type']}} </div>
        <div class="listComics"> <a href="{{route('partials.show', $comic->id)}}">View</a> </div>
        <div class="listComics"> <a href="{{route('partials.edit', $comic->id)}}">Edit</a> </div>
    </div>
    @endforeach
    
    <button><a href="{{route('partials.create', $comic)}}">crea</a></button>

</div>
{{-- <div class="container">
    @foreach($comics as $comic)
   
    @endforeach
</div> --}}


@endsection