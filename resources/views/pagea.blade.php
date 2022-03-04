<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagea</title>
    <style>
        .bangladesh {
            background-color: green;
            width: 600px;
            height: 400px;
            position: relative;
        }
        .bangladesh::after {
            content: "";
            background-color: red;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            position: absolute;
            left: 185px;
            top: 100px;

        }
    </style>
</head>
<body>
<h1>Hello User A Welcome to the Bangladesh</h1>
<h1>Only Register user can show this page</h1>
<h1>{{1970+1}}</h1>
    
  <div class="bangladesh"></div>
</body>
</html>
