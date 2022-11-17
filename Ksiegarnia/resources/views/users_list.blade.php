@extends('layouts.admin')

@section('content')
<div style="width: auto; height: 70px; display: flex;">
  <div class="box" >
  <a class="btn btn-success" href="/user_list_create">
      Dodaj użytkownika
    </a>
  </div>
  <div class="box" >
    <!-- <div class="col-md-4"> -->
      <form action="/searchuser" method="get">
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
