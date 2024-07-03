@extends('category.layout')

@section('content')
@if(session('success'))
    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
@endif

<a class="btn btn-success" href="{{ route('category.create') }}"><i class="fa fa-plus"></i> Create New</a>

<table class="table table-bordered table-striped mt-4">
    <thead>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($category as $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>
                    

                    <form action="{{ route('category.destroy',$row->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        <a class="btn btn-primary" href="{{ route('category.edit',$row->id) }}"><i class="fa-solid fa-edit"></i> Edit</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-secondary">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="2">There are no data</td>
            </tr>
        @endforelse
    </tbody>
</table>

<!-- pagination -->
{{ $category->links() }}


@endsection