@extends('layouts.navbar');

@section('title','Dodawanie strony');


@section('content')

    <form action="{{route('sites.save')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <input type="number" name="category" class="form-control" placeholder="Podaj numer kategorii">
        </div>

        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Podaj tytul">
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control" placeholder="Podaj tresc"></textarea>
        </div>

        <div class="form-group">
            <input type="text" name="img" class="form-control" placeholder="Podaj adres zdjecia">
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Zapisz</button>
        </div>
    </form>
@endsection