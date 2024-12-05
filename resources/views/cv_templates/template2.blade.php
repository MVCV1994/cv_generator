<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae - {{ $cv->nombre }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            background-color: #eaeaea;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #ffffff;
            padding: 25px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        header {
            text-align: left;
            border-bottom: 2px solid #333;
            margin-bottom: 20px;
        }
        h1 {
            margin: 0;
        }
        section {
            margin: 15px 0;
        }
        h2 {
            color: #555;
        }
        p {
            line-height: 1.6;
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
