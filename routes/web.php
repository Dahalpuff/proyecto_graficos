<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Servicios Jurídicos Gratuitos de la ONU
|--------------------------------------------------------------------------
|
| Definición de las 10 rutas funcionales para la navegación de la plataforma.
| Todas las rutas apuntan a sus respectivas plantillas Blade con nombres asignados.
|
*/

// 1. Inicio / Home
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// 2. Nosotros / Misión
Route::get('/nosotros', function () {
    return view('pages.nosotros');
})->name('nosotros');

// 3. Catálogo de Servicios Jurídicos
Route::get('/servicios', function () {
    return view('pages.servicios');
})->name('servicios');

// 4. Asesoría en Derechos Humanos
Route::get('/servicios/derechos-humanos', function () {
    return view('pages.derechos-humanos');
})->name('servicios.derechos-humanos');

// 5. Asesoría para Migrantes y Refugiados
Route::get('/servicios/migrantes', function () {
    return view('pages.migrantes');
})->name('servicios.migrantes');

// 6. Solicitar Asesoría Gratuita / Formulario
Route::get('/solicitud', function () {
    return view('pages.solicitud');
})->name('solicitud');

// Alias para contacto
Route::get('/contacto', function () {
    return redirect()->route('solicitud');
})->name('contacto');

// 7. Directorio de Abogados / Voluntarios
Route::get('/directorio', function () {
    return view('pages.directorio');
})->name('directorio');

// 8. Preguntas Frecuentes - FAQ
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

// 9. Centro de Recursos y Documentos
Route::get('/recursos', function () {
    return view('pages.recursos');
})->name('recursos');

// 10. Términos, Condiciones y Aviso Legal
Route::get('/terminos', function () {
    return view('pages.terminos');
})->name('terminos');
