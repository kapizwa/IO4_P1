@extends('layouts.admin')

@section('content')
@can('isAdmin')
<div style="margin-bottom: 10px;" class="row">
  <div class="col-lg-12">
  <a class="btn btn-success" href="/book_list_create">
  Dodaj książkę
  </a>
  </div>
</div>
@endcan
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
        <td>{{$book->wydawnictwo}}</td>
        <td>{{$book->autor}}</td>
        <td>
        
        </td>
      </tr>

    @endforeach
    </tbody>
</div>
@endsection
