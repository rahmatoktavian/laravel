@extends('category.layout')

@section('content')

<a class="btn btn-primary btn-sm" href="{{ route('category.index') }}"><i class="fa fa-arrow-left"></i> Back</a>

<br />
<strong>Name:</strong> <br/>
{{ $category->name }}
@endsection