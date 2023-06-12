<?php
use App\Http\Controllers\SolicitudController;
use Illuminate\Support\Facades\Route;

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
Route::get('/abonos', function () {
    return view('abonos');
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
Route::get('/servicios', function () {
    return view('servicios');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// rutas orden de servicio
Route::get('/Solicitud', [SolicitudController::class, 'index'])->name('ordenservicio');

Route::get('/Crear Orden de Servicio', [SolicitudController::class, 'create']);