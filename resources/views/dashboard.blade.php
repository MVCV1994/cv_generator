<x-app-layout>
    <x-slot name="header">
        <div class="text-center">
            <!-- Trabajo Final en blanco -->
            <h1 class="text-3xl font-bold text-white">
                Trabajo Final
            </h1>
            <!-- Universidad en anaranjado -->
            <p class="text-lg text-orange-500 dark:text-orange-300">
                Universidad Internacional San Isidro Labrador (UISIL) - {{ date('Y') }}
            </p>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-6">
                    Opciones Disponibles
                </h2>
                <!-- Menú con las opciones en un diseño más atractivo -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <a href="{{ route('cvs.create') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded shadow-lg text-center">
                        Crear CV
                    </a>
                    <a href="{{ route('cvs.index') }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-4 px-6 rounded shadow-lg text-center">
                        Ver Todos los CVs
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
