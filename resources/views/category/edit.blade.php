@extends('category.layout')

@section('content')
<form action="{{ route('category.update',$category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="inputName" class="form-label"><strong>Name:</strong></label>
    <input 
        type="text" 
        name="name" 
        value="{{ $category->name }}"
        class="form-control" 
        placeholder="Name"
        required>

    <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
    <a class="btn btn-secondary" href="{{ route('category.index') }}">Cancel</a>
    
</form>
@endsection