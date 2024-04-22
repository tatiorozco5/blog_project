@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear nuevo Post</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.store') }}">
                            @csrf  

                            <div class="form-group mb-3">
                                <label for="title">Titulo</label>
                                <input type="text" name="title" id = "title" class="form-control">
                            </div>
                            
                            <div class="mb-3 form-group">
                                <label  for="content">Contenido</label>
                                <textarea name="content" id="content" rows="5" class="form-control"></textarea>
                            </div> 
                            
                            <div class="mb-3 form-group">
                                <label  for="category">Categoria</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option> 
                                    @endforeach
                                </select>
                            </div>
                                                        
                            <button class="btn btn-primary mb3" type="submit">Guardar</button>
                        </form>
                    </div>        
                </div>
            </div>
        </div>
    </div>
@endsection
    