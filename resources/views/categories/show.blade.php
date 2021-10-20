<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
</head>

<body>
    <h1>Categories</h1>

    <h3>{{ $category->name }}</h3>
    <p>{{ $category->desc }}</p>
    <a href="{{ url("categories/$category->id/edit") }}">Edit</a>

    <form action="{{ url("categories/$category->id") }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">
    </form>
</body>

</html>