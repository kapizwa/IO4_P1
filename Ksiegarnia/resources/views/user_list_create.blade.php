@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Dodawanie użytkownika
    </div>

    <div class="card-body">
        <form method="POST" action="/user_list_create" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Imie</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                
                
            </div>
            <div class="form-group">
                <label class="required" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" required>
               
                
            </div>
            <div class="form-group">
                <label class="required" for="password">pass</label>
                <input class="form-control" type="password" name="password" id="password" required>
                
            </div>

            <!-- <div class="form-group">
                <label class="required" for="ilosc_sztuk">Ilość sztuk</label>
                <input class="form-control" type="text" name="ilosc_sztuk" id="ilosc_sztuk" required>
                
            </div>
            <div class="form-group">
                <label class="required" for="wydawnictwo">Wydawnictwo</label>
                <input class="form-control" type="text" name="wydawnictwo" id="wydawnictwo" required>
                
            </div>
            <div class="form-group">
                <label class="required" for="autor">Autor</label>
                <input class="form-control" type="text" name="autor" id="autor" required>
                
            </div> -->
            
           
            <div class="form-group">
                <button class="btn btn-success" type="submit">
                    Utwórz
                </button>
            </div>
        </form>
    </div>
</div>

@endsection