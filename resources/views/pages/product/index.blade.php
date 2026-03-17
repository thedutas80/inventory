
@extends('layouts.app')
@section('content')

<div class="container">
<h4 class="mb-4">All Products</h4>
<a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>

<div class="table-responsive mt-3 ">
    <table class="table table-striped table-hover">
     <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Price</th>
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
                    {{ $item->description }}
                  </td>
                  <td>
                    <img src="{{ Storage::url($item->image) }}" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->name }}">
                  </td>

                  <td>
                   <a href="#" class="btn btn-sm btn-warning text-white">Edit</a>
                   <a href="#" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
    </table>
</div>
</div>