@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Dodawanie książki
    </div>

    <div class="card-body">
        <form method="POST" action="/book_list_create" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="tytul">Tytuł</label>
                <input class="form-control" type="text" name="tytul" id="tytul" value="{{ old('tytul', '') }}" required>
                
                
            </div>
            <div class="form-group">
                <label class="required" for="cena">Cena</label>
                <input class="form-control" type="text" name="cena" id="cena" value="{{ old('cena') }}" required>
               
                
            </div>
            <div class="form-group">
                <label class="required" for="ilosc_stron">Ilość stron</label>
                <input class="form-control" type="text" name="ilosc_stron" id="ilosc_stron" required>
                
            </div>

            <div class="form-group">
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
                
            </div>
            
           
            <div class="form-group">
                <button class="btn btn-success" type="submit">
                    Utwórz
                </button>
            </div>
        </form>
    </div>
</div>

@endsection