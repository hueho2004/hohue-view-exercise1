<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/post" method="post">
        <div>
            @csrf
            <label class="col-4" for="name">Name</label>
            <input class="col-8" type="text" id="name" name="name">
        </div>
        <div class="row">
            <label class="col-4" for="username">UserName</label>
            <input class="col-8" type="text" id="username" name="username">
        </div>
        <div class="row">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>