<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisterPage</title>
</head>
<body>
    <form action="{{url('registerNow')}}" method="post" enctype="multipart/form-data">
        @csrf
        Name: <input type="text" name="name" id="name"><br>
        Email: <input type="email" name="email" id="email"><br>
        Password: <input type="password" name="password" id="password"><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>