@extends('layouts.admin')

@section('content')

<div class="d-flex align-items-center flex-column my-5"> 
    <div class="categoryEdit">
        <form action="{{ route('admin.categories.update', $category) }}" method="POST" style="min-width: 320px;" enctype="multipart/form-data">
            
            <h4>Categorie aanpassen</h4>
            <div class="form-group">
                <label for="name">naam</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('title', $category->name) }}">
            </div>
            <button type="submit" class="form-control btn btn-primary my-2">Opslaan</button>
            {{ csrf_field() }}
		    {{ method_field('PATCH') }}
        </form>
        <div class="productsList">
            <h4>Producten</h4>
            <ul>
                @foreach($category->products as $product)
                    <li>{{ $product->title }}</li>
                @endforeach
            </ul>
        </div>
    </div>
	

		
</div>

@endsection