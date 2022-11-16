@extends('layouts.admin')

@section('content')
<div class="row">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Email</th>
      <th scope="col">Rola</th>
      <th scope="col">Akcje</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>
        <td>
          <a href="deleteuser/{{ $user -> id}}">Usuń</a>
        </td>
      </tr>

    @endforeach
@endsection
