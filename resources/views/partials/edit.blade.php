@extends('layout.home')

@section('content')
<main>
    <div class="container">
        <h1>Modifica il fumetto!</h1>
    </div>
    <div class="container contForm">
        @dump($comic)
        <form action="{{route('partials.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            {{-- titolo --}}
            <div>
                <label class="control-labelTitolo" for="name">Titolo</label>
                <input type="text" value="{{  $comic->title }}" required name="title" id="name" placeholder="Inserisci qui il titolo">
            </div>
            {{-- tipologia --}}
            <div>
                <label class="" for="type">Tipologia:</label>
                <select class="" value="{{  $comic->type }}" required name="type" id="type">
                    <option value="">Seleziona tipologia</option>
                    <option value="book">Comic Book</option>
                    <option value="novel">Graphic Novel</option>
                </select>
            </div>
            {{-- immagine --}}
            <div>
                <label class="" for="thumb">Immagine:</label>
                <input class="" value="{{  $comic->thumb }}" type="text" name="thumb" id="image" placeholder="url image">
            </div>
            {{-- prezzo --}}
            <div>
                <label class="" required for="price">Prezzo:</label>
                <input class="" value="{{  $comic->price }}" type="text" name="price" id="price" placeholder="Prezzo Comic">
            </div>
            {{-- serie --}}
            <div>
                <label class=""  required for="series">Serie:</label>
                <input class="" value="{{  $comic->series }}" type="text" name="series" id="series" placeholder="Serie Comic">
            </div>
            {{-- data uscita --}}
            <div>
                <label class="" required for="sale_date">Data Uscita:</label>
                <input class="" value="{{  $comic->sale_date }}" type="date" name="sale_date" id="sale_date"placeholder="Data Uscita">
            </div>
            {{-- descrizione --}}
            <div>
                <p class="">Descrizione:</p>
                <textarea class="" value="{{  $comic->description }}" name="description" id="description" placeholder="Scrivi una Descrizione"></textarea>
            </div>
            <button class="" type="submit">
                Modifica!
              </button>
        </form>

    </div>
</main>
@endsection