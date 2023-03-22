@extends('admin.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>Category</h2>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope>Index</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">utilities</th>
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
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-warning">Delete</a>
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