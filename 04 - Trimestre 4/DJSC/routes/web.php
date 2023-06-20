<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SolicitudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduccionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/asignarEmpleadoActividad', function () {
    return view('asignarEmpleadoActividad');
});
Route::get('/asignarempleados', function () {
    return view('asignarempleados');
});
Route::get('/asignarProcesosProduccion', function () {
    return view('asignarProcesosProduccion');
});
Route::get('/catalogo', function () {
    return view('catalogo');
});
Route::get('/consultarcontratos', function () {
    return view('consultarcontratos');
});
Route::get('/consultarordenesservicio', function () {
    return view('consultarordenesservicio');
});
Route::get('/consultarordenproduccion', function () {
    return view('consultarordenproduccion');
});
Route::get('/Crear Orden de Servicio', function () {
    return view('Crear Orden de Servicio');
});
Route::get('/dashboard jefe de produccion', function () {
    return view('dashboard jefe de produccion');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/dashboardV', function () {
    return view('dashboardV');
});
Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
});
Route::get('/error 404', function () {
    return view('error 404');
});
Route::get('/error 500', function () {
    return view('error 500');
});
Route::get('/generarinformesp', function () {
    return view('generarinformesp');
});
Route::get('/generarinformesS', function () {
    return view('generarinformesS');
});
Route::get('/db', function () {
    return view('db');
});
Route::get('/pedidos', function () {
    return view('pedidos');
});
Route::get('/pedidosjp', function () {
    return view('pedidosjp');
});
Route::get('/RealizarAbono', function () {
    return view('RealizarAbono');
});
Route::get('/realizarventa', function () {
    return view('realizarventa');
});
Route::get('/registrarActividades', function () {
    return view('registrarActividades');
});
Route::get('/registrarOrdenProduccion', function () {
    return view('registrarOrdenProduccion');
});
Route::get('/Registro de Servicio', function () {
    return view('Registro de Servicio');
});
Route::get('/RegistroContrato', function () {
    return view('RegistroContrato');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// rutas orden de servicio
Route::get('/servicios', [SolicitudController::class, 'index'])->name('servicios');

Route::get('/Crear Orden de Servicio', [SolicitudController::class, 'create'])->name('ordenservicio');

Route::post('/Crear Orden de Servicio', [SolicitudController::class, 'store'])->name('almacenarordenservicio');

Route::get('/mis-solicitudes', [SolicitudController::class, 'misSolicitudes'])->name('abonos');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pedidosjp', [ProduccionController::class, 'index'])->name('pedidosjp');

Route::get('/registrarOrdenProduccion', [ProduccionController::class, 'create'])->name('ordenProduccion');

Route::post('/ordenproduccion', [ProduccionController::class, 'almacenarOrdenProduccion'])
    ->name('ordenproduccion.almacenarOrdenProduccion');

Route::get('/consultarordenproduccion', [ProduccionController::class, 'consultarOrdenProduccion'])->name('consultarordenproduccion');

Route::get('/ordenProduccion/{id}/edit', [ProduccionController::class, 'edit'])->name('ordenProduccion.edit');

Route::put('/ordenProduccion/{id}', [ProduccionController::class, 'update'])->name('ordenProduccion.update');

Route::delete('/ordenProduccion/{id}', [ProduccionController::class, 'destroy'])->name('ordenProduccion.destroy');

Route::get('/consultarordenesservicio', [SolicitudController::class, 'listaSolicitudes'])->name('listaSolicitudes');

// rutas contrato sub empresa
