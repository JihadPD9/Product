<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Hobi</h1>

    @foreach ($hobi as $data)
    <ul><li><i>{{ $data }}</i></li></ul>
    @endforeach
</body>
</html>