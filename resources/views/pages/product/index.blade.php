
@extends('layouts.app')
@section('content')

<div class="container">
<h4 class="mb-4">All Products</h4>
<a href="#" class="btn btn-primary">Create Product</a>

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
                    {{ $item->price }}
                  </td>
                  <td>
                    {{ $item->description }}
                  </td>
                  <td>
                    <img src="https://images.unsplash.com/photo-1761839258044-e59f324b5a7f?q=80&w=871&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $item->name }}">
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