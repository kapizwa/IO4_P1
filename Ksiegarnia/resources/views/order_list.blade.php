@extends('layouts.admin')

@section('content')
<div class="row">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Data</th>
      <th scope="col">Adres wysyłki</th>
      <th scope="col">Książka</th>
      <th scope="col">Zamawiający</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
      <tr>
        <th scope="row">{{$order->id}}</th>
        <td>{{$order->data}}</td>
        <td>{{$order->adres_wysylki}}</td>
        <td>{{$order->book->tytul}}</td>
        <td>{{$order->user->name}}</td>
      </tr>

    @endforeach
@endsection
