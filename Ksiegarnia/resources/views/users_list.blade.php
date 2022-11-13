@extends('layouts.admin')

@section('content')
<div class="row">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Email</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
        
        </td>
      </tr>

    @endforeach
@endsection
