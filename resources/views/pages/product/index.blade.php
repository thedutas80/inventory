
@extends('layouts.app')
@section('content')

<div class="container">
<h4 class="mb-4">All Products</h4>
<a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
<title>@yield('title', 'Toko Online') | Brand Kita</title>
<div class="table-responsive mt-3 ">
    <table class="table table-striped table-hover">
     <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                                     <td>
                    {{ $item->id }}
                  </td>
                                      <td>
                    {{ $item->name }}
                  </td>
                  <td>
                    Rp. {{ number_format($item->price, 0, ',', '.') }}
                  </td>
                  <td>
                    {{ $item->stock }} pcs
                  </td>
                  <td>
                    {{ $item->description }}
                  </td>
                  <td>
                    <img src="{{ Storage::url($item->image) }}" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->name }}">
                  </td>

                  <td>
                   <a href="{{ route('products.edit', $item->id) }}" class="btn btn-sm btn-warning text-white">Edit</a>
                   <form action="{{ route('products.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
    </table>
</div>
</div>