@extends('layouts.admin')

@section('content')
<div class="row">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tytuł</th>
      <th scope="col">Cena</th>
      <th scope="col">Ilość stron</th>
      <th scope="col">Ilość sztuk</th>
      <th scope="col">Wydawnictwo</th>
      <th scope="col">Autor</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($books as $book)
      <tr>
        <th scope="row">{{$book->id}}</th>
        <td>{{$book->tytul}}</td>
        <td>{{$book->cena}}</td>
        <td>{{$book->ilosc_stron}}</td>
        <td>{{$book->ilosc_sztuk}}</td>
        <td>{{$book->wydawnictwo->nazwa}}</td>
        <td>{{$book->autor->imie}} {{$book->autor->nazwisko}}</td>
        <td>
        
        </td>
      </tr>

    @endforeach
    </tbody>
@endsection
