@extends('admin.dashboard')

@section('content')
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col">
                <h2>Category</h2>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('category.index') }}" class="btn btn-primary text-center">Back</a>
            </div>
        </div>

        <form action="{{ route('category.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input-name">Name</label>
                        <input type="text" class="form-control" name="name" id="input-name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" id="input-slug" required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>

    </div>
@endsection
