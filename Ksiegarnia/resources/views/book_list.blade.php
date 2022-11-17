@extends('layouts.admin')

@section('content')
@can('isAdmin')
<div class="user_list_bck">

  <style>
    .user_list_bck {
      height: 100vh;
      background-image: url('/images/book_list.jpg');
      background-size: cover;
      padding: 5px;
    }
    </style>
  <div style="width: auto; height: 70px; display: flex;">
    <div class="box" >
    <a class="btn btn-success" href="/book_list_create">
        Dodaj książkę
      </a>
    </div>
    <div class="box" >
      <!-- <div class="col-md-4"> -->
        <form action="/searchbook" method="get">
          <div class="input-group">
            <input type="search" name="search" class="form-control">
            <span class="input-group-prepend">
              <button type="submit" class="btn btn-primary">Szukaj</button>
            </span>
          </div>
        </form>
      <!-- </div> -->
    </div>
  </div>
  <style>
    .box {
      height: 50px;
      width: 50%;
    }
  </style>
  @endcan
  <div class="row" style="padding: 20px;">
  <table class="table table-hover" style="opacity : 2.00;
filter : alpha(opacity=200);">
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
</div>
@endsection
