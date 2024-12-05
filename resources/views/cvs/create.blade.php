<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear CV</title>
    @vite('resources/css/app.css') <!-- Si usas Vite para cargar los archivos CSS -->
    <style>
        body {
            background-color: #2D3748;
            /* Fondo oscuro */
            color: #E2E8F0;
            /* Texto claro */
        }

        nav {
            background-color: #4A5568;
            /* Color de fondo de la barra de navegación */
        }

        nav a {
            color: #E2E8F0;
            /* Color de texto de los enlaces */
        }

        nav button {
            background-color: #2B6CB0;
            /* Color del botón */
        }

        nav button:hover {
            background-color: #2C5282;
            /* Color al pasar el mouse */
        }

        .bg-white {
            background-color: #1A202C;
            /* Fondo del formulario */
        }

        .text-blue-600 {
            color: #63B3ED;
            /* Color azul claro para el título */
        }

        .border-gray-300 {
            border-color: #4A5568;
            /* Color del borde de los campos */
        }

        .focus\:ring-blue-500:focus {
            ring-color: #63B3ED;
            /* Color del anillo de enfoque */
        }

        .hover\:bg-blue-700:hover {
            background-color: #2B6CB0;
            /* Color al pasar el mouse en el botón de guardar */
        }
    </style>
</head>

<body>

    <!-- Barra de navegación -->
    <nav class="p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold">Inicio</a>
            <div class="relative">
                <button class="text-white px-4 py-2 rounded-md focus:outline-none">
                    Menú
                </button>
                <!-- Menú desplegable -->
                <div class="absolute right-0 mt-2 w-48 bg-gray-800 text-white rounded-md shadow-lg hidden">
                    <ul class="space-y-2 p-2">
                        <li><a href="{{ route('cvs.index') }}" class="block px-4 py-2 hover:bg-gray-700">Ver CVs</a></li>
                        <li><a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-700">Regresar al Dashboard</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Formulario de Crear CV -->
    <div class="max-w-4xl mx-auto mt-12 p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-center mb-6 text-blue-600">Crear un Nuevo CV</h1>

        <form action="{{ route('cvs.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="nombre" class="block text-lg font-medium">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" required
                    class="mt-2 p-3 w-full border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="email" class="block text-lg font-medium">Correo electrónico</label>
                <input type="email" name="email" id="email" placeholder="Correo electrónico" required
                    class="mt-2 p-3 w-full border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="telefono" class="block text-lg font-medium">Teléfono</label>
                <input type="text" name="telefono" id="telefono" placeholder="Teléfono" required
                    class="mt-2 p-3 w-full border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="experiencia" class="block text-lg font-medium">Experiencia</label>
                <textarea name="experiencia" id="experiencia" placeholder="Experiencia" required
                    class="mt-2 p-3 w-full border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div>
                <label for="educacion" class="block text-lg font-medium">Educación</label>
                <textarea name="educacion" id="educacion" placeholder="Educación" required
                    class="mt-2 p-3 w-full border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="mt-4 px-6 py-3 bg-blue-600 text-white text-lg font-medium rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Guardar</button>
            </div>
        </form>
    </div>

    <script>
        // Script para mostrar/ocultar el menú desplegable
        document.querySelector('button').addEventListener('click', () => {
            document.querySelector('div.absolute').classList.toggle('hidden');
        });
    </script>

</body>

</html>