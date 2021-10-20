<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add categories</title>
</head>
<body>
    <h1> Add categories</h1>

    @if($errors->any())
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    @endif
    
    <form action="{{ url('/categories') }}" method="post">
    <input type="text" name="name" id="">
    @csrf
        <br>
        <textarea name="desc" id="" cols="30" rows="5"></textarea>
        <br>
        <input type="submit" value="add">
    </form>

</body>

</html>