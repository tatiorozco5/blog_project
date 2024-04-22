@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                <h2>Crear categoria</h2>
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Nombre categoria</label>
                        <input class="form-control" type="text" name="category_name" id = "category" placeholder="Category Name">
                    </div>
                    
                    <div class="mb-3 form-check">
                        <label  for="active">Activa</label>
                        <input class="form-check-input" type="checkbox" name="active" id="active" value="1">
                    </div>    
            
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>        
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    
