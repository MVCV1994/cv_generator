<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae - {{ $cv->nombre }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        header {
            text-align: center;
            color: #2c3e50;
        }
        h1 {
            margin-bottom: 10px;
        }
        section {
            margin: 20px 0;
        }
        h2 {
            color: #34495e;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>{{ $cv->nombre }}</h1>
            <p><strong>Email:</strong> {{ $cv->email }}</p>
            <p><strong>Teléfono:</strong> {{ $cv->telefono }}</p>
        </header>
        <main>
            <section>
                <h2>Experiencia</h2>
                <p>{{ $cv->experiencia }}</p>
            </section>
            <section>
                <h2>Educación</h2>
                <p>{{ $cv->educacion }}</p>
            </section>
        </main>
    </div>
</body>
</html>
