@extends('admin.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
                <h2>Products</h2>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('category.create') }}" class="btn btn-primary text-center">Create</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-capitalize" scope="col">Index</th>
                    <th class="text-capitalize" scope="col">Image</th>
                    <th class="text-capitalize" scope="col">Name</th>
                    <th class="text-capitalize" scope="col">brand</th>
                    <th class="text-capitalize" scope="col">Description</th>
                    <th class="text-capitalize" scope="col">model</th>
                    <th class="text-capitalize" scope="col">category</th>
                    <th class="text-capitalize" scope="col">Price</th>
                    <th class="text-capitalize" scope="col">utilities</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $index = 1;
                @endphp
                @foreach ($products as $product)
                    <tr class="text-center">
                        <td>{{ $index }}</td>
                        <td>
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="image_url">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->brand }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->model }}</td>
                        <td>{{ $product->price }} USD</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a href="{{ route('product.edit', $product->id )}}" class="btn btn-info d-block" style="margin-right: 10px;">Edit</a>
                            <form action="{{route('product.destroy', $product->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $index++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
@endpush