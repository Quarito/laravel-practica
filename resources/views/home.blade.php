<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Laravel</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f9; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; }
        li { margin-bottom: 8px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Entorno de Desarrollo en {{ $sistema }}</h1>
        <p>Lista de tecnologías configuradas:</p>
        <ul>
            @foreach($tecnologias as $tech)
                <li><strong>{{ $tech }}</strong></li>
            @endforeach
        </ul>
    </div>
</body>
</html>
