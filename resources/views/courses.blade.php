<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Details</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0b0a4e;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        h3 {
            color: #555;
            margin-bottom: 10px;
        }
        .course-info {
            margin-bottom: 20px;
        }
        .course-info p {
            margin: 5px 0;
            font-size: 16px;
            color: #444;
        }
        .course-info .label {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>COURSES FOR USER {{$course->user}}</h2>
        
        <div class="course-info">
            <h3>Course Name:</h3>
            <p>{{ $course->name }}</p>
        </div>

        <div class="course-info">
            <h3>Description:</h3>
            <p>{{ $course->description }}</p>
        </div>
    </div>
</body>
</html>
