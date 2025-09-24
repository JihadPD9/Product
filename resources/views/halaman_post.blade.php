<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        th {
            background-color:lightgrey;
        }
        table {
            border-radius: 5px;
        }
        body {
            font-family:Arial, sans-serif;
        }
    </style>

    <center>
    <h1>Data Post</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
        </tr>
            @foreach ($post as $data)
            <tr>    
                <td>{{ $data->id }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->content }}</td>
            </tr>
            @endforeach
    </table>
    </center>

</body>
</html>