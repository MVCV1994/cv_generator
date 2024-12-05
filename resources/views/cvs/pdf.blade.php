<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae - {{ $cv->nombre }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Archivo CSS común -->
</head>
<body>
    <div class="container">
        <header>
            <h1>{{ $cv->nombre }}</h1>
            <p><strong>Correo:</strong> {{ $cv->email }}</p>
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
