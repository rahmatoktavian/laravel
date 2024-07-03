@extends('category.layout')

@section('content')

<form action="{{ route('category.store') }}" method="POST">
    @csrf

    <label for="inputName" class="form-label"><strong>Name:</strong></label>
    <input 
        type="text" 
        name="name" 
        class="form-control"
        required>

    <br />
    <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    <a class="btn btn-secondary" href="{{ route('category.index') }}">Cancel</a>
        
</form>
@endsection