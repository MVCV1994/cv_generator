<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CVs</title>
    <style>
        body {
            background-color: #2D3748;
            color: #E2E8F0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #63B3ED;
            text-align: center;
        }

        a {
            color: #63B3ED;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #1A202C;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
        }

        .button-group {
            text-align: center;
            margin-top: 20px;
        }

        .button-group a {
            margin: 0 10px;
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

        form {
            display: inline;
        }

        button {
            background-color: red;
            color: #E2E8F0;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #1A202C;
            color: red;
        }

        .success-message {
            background-color: #48BB78;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Listado de CVs</h1>

        @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
        @endif

        <div style="text-align: center; margin-bottom: 20px;">
            <a href="{{ route('cvs.create') }}" style="background-color: #4A5568; color: #E2E8F0; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Crear nuevo CV</a>
        </div>

        <ul>
            @foreach($cvs as $cv)
            <li>
                {{ $cv->nombre }}
                <a href="{{ route('cvs.show', $cv->id) }}">Ver</a> |
                <a href="{{ route('cvs.download', $cv->id) }}">Descargar PDF</a> |
                <form action="{{ route('cvs.destroy', $cv->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
            @endforeach
        </ul>

        <div class="button-group">
            <a href="{{ route('dashboard') }}">Regresar al Dashboard</a>
        </div>
    </div>
</body>

</html>
