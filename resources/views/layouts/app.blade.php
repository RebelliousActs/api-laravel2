<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: black;
        }
        nav{
            background-color: #333;
            padding: 10px;
        }
        nav a{
            color: white;
            margin-right: 10px;
            text-decoration: none;
        }
        table, th, td {
            border: 1px solid purple;
            border-collapse: collapse;
        }
        table {
            display: flexbox;
            width: 100%;
            margin-top: 20px;
            background-color: #222;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 8px;
            text-align: left;
            color: white;
        }
    </style>
    <title>Proyecto estudiantes</title>
</head>
<body>
    <nav>
        <a href="/">Inicio</a>
        <a href="students">Estudiantes</a>    
    </nav>
    @yield('content')
</body>
</html>