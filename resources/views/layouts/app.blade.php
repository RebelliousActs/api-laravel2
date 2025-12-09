<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
            border: 1px solid black;
            border-collapse: collapse;
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