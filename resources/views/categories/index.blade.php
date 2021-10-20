<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categories</title>
</head>
<body>
    <h1> All categories</h1>

    @foreach ($categories as $category)
    <h3>
        <a href="{{ url("/categories/$category->id") }}">
            {{ $category->name }}
        </a>
    </h3>
    <p>{{ $category->desc }}</p>
    <hr>
    @endforeach
</body>

</html>