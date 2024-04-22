@extends('layouts.app')
@section('content')

<div class="conteiner">

<h1>Edicion de post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      
        @endforeach
    </div>   
@endif

    <form action="{{route('posts.update', $post->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title"  name="title" value="{{ old('title', $post->title) }}">
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', $post->content) }} </textarea>
    </div>

    <select class="form-control mb-3" id="category-id" name="category-id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : ''}}>{{ $category->category_name }}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary mb-3">Crear post</button>

</form>
</div>

@endsection