<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <span>
        Hello {{$user['name']}}, your credentials are <br/>
        Login - {{$user['email']}} <br/>
        Password - {{$user['pass']}}
    </span>
</div>
</body>
</html>


