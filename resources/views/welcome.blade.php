<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <a href="{{ route('feature') }}">Click saya untuk berpindah ke halaman Feature</a>
    <p>Data User</p>
    <ul>
        @foreach ($users as $user)
            <li>
                <a href="{{ route('users.show', $user->id)}}">
                    {{ $user->name }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
