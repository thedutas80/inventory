@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">Edit Products </h4>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Image -->
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input 
                type="file" 
                class="form-control" 
                id="image" 
                name="image" 
                accept="image/*"
            >
        </div>

        <!-- Nama Produk -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input 
                type="text" 
                class="form-control" 
                id="name" 
                name="name" 
                value="{{ $product->name }}"
            >
        </div>

        <!-- Price -->
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input 
                type="number" 
                class="form-control" 
                id="price" 
                name="price" 
              value="{{ $product->price }}"
            >
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea 
                class="form-control" 
                id="description" 
                name="description" 
                rows="3" 
             
            >{{ $product->description }}</textarea>
        </div>

        <!-- Button -->
        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
        </div>

    </form>
</div>
@endsection