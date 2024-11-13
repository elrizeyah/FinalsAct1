<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COURSE: {{ $course->name }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0b0a4e;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1{
            text-align: center;
            color: #0b0a4e;
        }

        h2, h3 {
            text-align: left;
            color: #0b0a4e;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .user-info {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f2f2f2;
        }

        .user-info h2 {
            font-size: 1.1em;
        }

        .user-info h3 {
            font-size: 1em;
            color: #555;
        }

        .course-details {
            padding: 15px;
            margin-top: 20px;
            background-color: #fafafa;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Course: {{ $course->name }}</h1>
        @foreach($course->users as $user)
            <div class="user-info">
                <h2>Name: {{ $user->name }} | Email: {{ $user->email }}</h2>
            </div>
        @endforeach

        <div class="course-details">
            <h3>Course: </h3>{{ $course->name }}
            <h3>Description: </h3>{{ $course->description }}
        </div>
    </div>
</body>
</html>
