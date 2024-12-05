<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CvController extends Controller
{
    // Mostrar todos los CVs
    public function index()
    {
        $cvs = Cv::all(); // Obtener todos los CVs
        return view('cvs.index', compact('cvs')); // Pasar los CVs a la vista
    }

    // Crear un nuevo CV
    public function create()
    {
        return view('cvs.create'); // Mostrar el formulario para crear un nuevo CV
    }

    // Almacenar un nuevo CV
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'experiencia' => 'required',
            'educacion' => 'required',
        ]);

        // Crear un nuevo CV en la base de datos
        $cv = Cv::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'experiencia' => $request->experiencia,
            'educacion' => $request->educacion,
        ]);

        // Redirigir a la vista de 'show' con un mensaje de éxito
        return redirect()->route('cvs.show', $cv->id)->with('success', 'CV creado exitosamente.');
    }

    // Mostrar los detalles de un CV específico
    public function show($id)
    {
        $cv = Cv::findOrFail($id); // Buscar el CV por ID
        return view('cvs.show', compact('cv')); // Pasar los datos del CV a la vista
    }

    // Descargar el CV como PDF
    public function download($id, Request $request)
    {
        $cv = Cv::findOrFail($id); // Buscar el CV por ID
        $template = $request->input('template', 'default'); // Usar 'default' si no se selecciona plantilla

        // Determinar la plantilla a usar con los nombres correctos
        $view = match ($template) {
            'modern' => 'cv_templates.template1', // Vista para la plantilla moderna
            'classic' => 'cv_templates.template2', // Vista para la plantilla clásica
            default => 'cv_templates.template3', // Vista por defecto
        };

        // Generar el PDF con la vista seleccionada y pasar los datos del CV
        $pdf = Pdf::loadView($view, compact('cv'));

        // Descargar el PDF con el nombre del CV
        return $pdf->download('Curriculum-' . $cv->nombre . '.pdf');
    }

    // Eliminar un CV
    public function destroy($id)
    {
        // Buscar el CV por ID
        $cv = Cv::findOrFail($id);

        // Eliminar el CV de la base de datos
        $cv->delete();

        // Redirigir al listado con un mensaje de éxito
        return redirect()->route('cvs.index')->with('success', 'Currículo eliminado correctamente.');
    }
}
