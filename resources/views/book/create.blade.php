<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11</title>
</head>
<body>
      
<form action="{{ route('book.store') }}" method="POST">
    @csrf

    Title : <input type="text" name="title" />
    <br />
    <button>Save</button>
</form>

</body>
</html>
