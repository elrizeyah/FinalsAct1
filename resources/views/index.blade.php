<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All User Profiles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color: #0b0a4e;
            color: white;
            padding: 15px;
            margin: 0;
        }

        ul {
            padding: 20px;
            margin: 0;
            list-style-type: none;
        }

        li {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        li strong {
            display: block;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        li div {
            font-size: 1em;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>ALL USER PROFILES</h1>
    <ul>
        @foreach($profiles as $profile)
            <li>
                <strong>{{ $profile->user->name }}</strong>
                <div>Email: {{ $profile->user->email }}</div>
                <div>Profile Bio: {{ $profile->bio }}</div>
            </li>
        @endforeach
    </ul>
</body>
</html>
