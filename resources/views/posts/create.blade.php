<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <table>
            <tr>
                <th>Title</th>
                <th><textarea name="title" rows="1" cols="100"></textarea></th>
            </tr>
            <tr>
                <th>Content:</th>
                <th><textarea name="content" rows="5" cols="100"></textarea></th>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
</body>

</html>