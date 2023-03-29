@extends('admin.dashboard')

@section('content')
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col">
                <h2>Product</h2>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('product.index') }}" class="btn btn-primary text-center">Back</a>
            </div>
        </div>

        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                {{-- name --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input-name">Name</label>
                        <input type="text" class="form-control" name="name" id="input-name" required>
                    </div>
                </div>
                {{-- description --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input-description">Description</label>
                        <input type="text" class="form-control" name="description" id="input-description" required>
                    </div>
                </div>
            </div>
            {{-- row-2 --}}
            <div class="row">
                {{-- price --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input-price">Price</label>
                        <input type="" class="form-control" name="price" id="input-price" required>
                    </div>
                </div>
                {{-- category_id --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input-category">Category</label>
                        <select name="category" id="input-category" class="form-control" required>
                            <option value="">---Choose category---</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            {{-- row-3 --}}
            <div class="row">
                {{-- brand --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input-brand">Brand</label>
                        <input type="text" class="form-control" name="brand" id="input-brand" required>
                    </div>
                </div>
                {{-- model --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input-model">Model</label>
                        <input type="text" class="form-control" name="model" id="input-model" required>
                    </div>
                </div>
            </div>
            {{-- row-4 --}}
            <div class="row">
                {{-- image --}}
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="input-image">Image</label>
                        <input type="file" class="form-control" name="image" id="input-image" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>

    </div>
@endsection
