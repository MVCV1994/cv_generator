<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae - {{ $cv->nombre }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            font-family: Verdana, Geneva, sans-serif;
            background: linear-gradient(120deg, #fdfbfb, #ebedee);
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            border: 1px solid #ddd;
        }
        header {
            text-align: center;
            background-color: #007BFF;
            color: white;
            padding: 10px 0;
            border-radius: 8px 8px 0 0;
        }
        h1 {
            margin: 0;
            font-size: 24px;
        }
        section {
            margin: 20px 0;
        }
        h2 {
            text-transform: uppercase;
            color: #444;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
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
