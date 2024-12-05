<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cv->nombre }}</title>
    <style>
        body {
            background-color: #2D3748;
            /* Fondo oscuro */
            color: #E2E8F0;
            /* Texto claro */
            font-family: Arial, sans-serif;
            /* Fuente básica */
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #63B3ED;
            /* Color azul claro para el título */
            text-align: center;
        }

        p {
            margin: 10px 0;
            /* Espaciado entre párrafos */
        }

        strong {
            color: #63B3ED;
            /* Color azul claro para los textos destacados */
        }

        .container {
            max-width: 800px;
            /* Ancho máximo del contenedor */
            margin: 0 auto;
            /* Centrar el contenedor */
            background-color: #1A202C;
            /* Fondo del contenedor */
            padding: 20px;
            /* Espaciado interno */
            border-radius: 8px;
            /* Bordes redondeados */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            /* Sombra */
        }

        form {
            margin-top: 20px;
        }

        label {
            color: #63B3ED;
            font-weight: bold;
        }

        select,
        button {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #63B3ED;
            border-radius: 5px;
            font-size: 1rem;
        }

        button {
            background-color: #63B3ED;
            color: #1A202C;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        button:hover {
            background-color: #1A202C;
            color: #63B3ED;
        }

        .button-group {
            text-align: center;
            margin-top: 20px;
        }

        .button-group a {
            margin: 0 10px;
            /* Espaciado entre botones */
            text-decoration: none;
            padding: 10px 15px;
            color: #E2E8F0;
            background-color: #63B3ED;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button-group a:hover {
            background-color: #1A202C;
            color: #63B3ED;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ $cv->nombre }}</h1>
        <p><strong>Correo:</strong> {{ $cv->email }}</p>
        <p><strong>Teléfono:</strong> {{ $cv->telefono }}</p>
        <p><strong>Experiencia:</strong> {{ $cv->experiencia }}</p>
        <p><strong>Educación:</strong> {{ $cv->educacion }}</p>

        <!-- Formulario para seleccionar estilo -->
        <form action="{{ route('cvs.download', ['id' => $cv->id]) }}" method="GET">
            <label for="template">Seleccionar estilo:</label>
            <select name="template" id="template">
                <option value="default">Por defecto</option>
                <option value="modern">Moderno</option>
                <option value="classic">Clásico</option>
            </select>
            <button type="submit" class="btn btn-primary">Descargar PDF</button>
        </form>

        <!-- Botón para eliminar CV -->
        <form action="{{ route('cvs.destroy', ['cv' => $cv->id]) }}" method="POST" style="margin-top: 15px;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"
                style="background-color: red; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
                Eliminar CV
            </button>
        </form>

        <!-- Grupo de botones -->
        <div class="button-group">
            <a href="{{ route('cvs.index') }}">Volver al listado</a>
            <a href="{{ route('dashboard') }}">Regresar al Dashboard</a>
        </div>
    </div>
</body>

</html>
