@extends('admin.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
                <h2>Category</h2>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ route('category.create') }}" class="btn btn-primary text-center">Create</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-capitalize" scope="col">Index</th>
                    <th class="text-capitalize" scope="col">Name</th>
                    <th class="text-capitalize" scope="col">Slug</th>
                    <th class="text-capitalize" scope="col">utilities</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $index = 1;
                @endphp
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td class="d-flex">
                            <a href="{{ route('category.edit', $category->id )}}" class="btn btn-info d-block" style="margin-right: 10px;">Edit</a>
                            <form action="{{route('category.destroy', $category->id)}}" method="POST">
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
