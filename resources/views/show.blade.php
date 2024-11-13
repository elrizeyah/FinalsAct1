<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $profile->user->name }}'s Profile</title>
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

        .profile-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .profile-container p {
            font-size: 1.1em;
            margin-bottom: 10px;
        }

        .profile-container p strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>{{ $profile->user->name }}'s Profile</h1>
    <div class="profile-container">
        <p><strong>Email:</strong> {{ $profile->user->email }}</p>
        <p><strong>Profile Bio:</strong> {{ $profile->bio }}</p> 
    </div>
</body>
</html>