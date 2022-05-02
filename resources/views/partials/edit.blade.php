@extends('layout.home')

@section('content')
<main>
    <div class="container">
        <h1>Modifica il fumetto!</h1>
    </div>
    <div class="container contForm">
        <div>
            <p>Immagine attuale :</p>
            <img src="{{$comics->thumb}}" alt="">
          </div>
        <form action="{{route('partials.update', $comics->id)}}" method="POST">
            @csrf
            @method('PUT')
            {{-- titolo --}}
            <div>
                <label class="control-labelTitolo" for="name">Titolo</label>
                <input type="text" value="{{  $comics->title }}" required name="title" id="name" placeholder="Inserisci qui il titolo">
            </div>
            {{-- tipologia --}}
            <div>
                <label class="" for="type">Tipologia:</label>
              
                <select class=""  required name="type" id="type">
                  
                    <option value="book" {{ $comics->type == 'book'? 'selected' : '' }}>book</option>
                    <option value="graphic novel"{{$comics->type == 'graphic novel'? 'selected' : ''}}>novel</option>
                </select>
            </div>
            {{-- immagine --}}
            <div>
                <label class="" for="thumb">Immagine:</label>
                <input class="" value="{{  $comics->thumb }}" type="text" name="thumb" id="image" placeholder="url image">
            </div>
            {{-- prezzo --}}
            <div>
                <label class="" required for="price">Prezzo:</label>
                <input class="" value="{{  $comics->price }}" type="text" name="price" id="price" placeholder="Prezzo Comic">
            </div>
            {{-- serie --}}
            <div>
                <label class=""  required for="series">Serie:</label>
                <input class="" value="{{  $comics->series }}" type="text" name="series" id="series" placeholder="Serie Comic">
            </div>
            {{-- data uscita --}}
            <div>
                <label class="" required for="sale_date">Data Uscita:</label>
                <input class="" value="{{  $comics->sale_date }}" type="date" name="sale_date" id="sale_date"placeholder="Data Uscita">
            </div>
            {{-- descrizione --}}
            <div>
                <p class="">Descrizione attuale :<br>  {{  $comics->description }}</p><br>
                <textarea class=""  name="description" id="description" cols="120" rows="10" placeholder="Modifica Descrizione">
                    {{  $comics->description }}
                </textarea>
            </div>
            <button class="" type="submit">
                Modifica!
              </button>
        </form>

    </div>
</main>
@endsection