<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});



Route::get('/alumno', function() {
	return view('alumno.dashboard');
});

//Route::get('/pdf', 'ReservarController@pdf')->name('pdf');
//Route::get('/inicio', function() {
	//return view('inicio');
//});


// Routes Auth
Route::get('/login', 'ConnectController@getLogin')->name('login');
Route::post('/login', 'ConnectController@postLogin')->name('login');
Route::get('/register', 'ConnectController@getRegister')->name('register');
Route::post('/register', 'ConnectController@postRegister')->name('register');
Route::get('/logout', 'ConnectController@getLogout')->name('logout');

Route::get('materiales/{materiales}/show','MaterialController@show');
//Route::post('user','UserControler@store');
//Route::get('user/crear' ,'UserControler@create');

//rutas ajax

Route::put('_asistencia/{id}','AjaxController@updateAsistencia');

//rutas materiales

Route::resource('materiales','MaterialController');
Route::get('reservar/{Reservar}/create','AlumnoReservas@create');
Route::post('reservas','AlumnoReservas@store');
Route::get('reservas','AlumnoReservas@index');
Route::get('estado','MaterialController@Estado');
Route::get('material','AlumnoReservas@Material');
//Route::get('descarga','ReservarController@pdf');

Route::get('usuarios','ReservarController@MaterialReservado');
Route::get('usuarios/{usuarios}/Reservas','ReservarController@Reservas');

//rutas de lista adeudos
Route::get('listaadeudos','ReservarController@ListaAdeudo');
Route::get('deudas/{deudas}/deudas','ReservarController@Deudas');

Route::get('asistencia','AsistenciaController@index');
Route::get('asistencia/create','AlumnoReservas@createasist');
//Route::put('asistencia/{asistir}','AsistenciaController@update');
Route::post('asistir','AlumnoReservas@storeasist');
Route::post('filtrar','AsistenciaController@filtrar')->name('buscar');

//asistencia
Route::get('alumnos','AsistenciaController@Asistencia');
Route::get('alumnos/{alumnos}/Asistencia','AsistenciaController@Asistir');
Route::put('asistio/{asistio}','AsistenciaController@update');

//GENERAR REPORTES PDF
Route::get('reportes','ReportesController@reportes');
Route::post('reportes','ReportesController@search')->name('search');
Route::get('descarga','ReportesController@pdf');
Route::post('descarga','ReportesController@generar')->name('generar');

Route::post('reportasist','ReportesController@searchAsist')->name('searchAsist');
Route::post('descagaasist','ReportesController@generarReport')->name('generarAsist');







Route::get('reporteMat','ReportesController@ReporteMaterial');
Route::get('materialexist','ReportesController@index');

//Route::get('recibir','RecibirController@create');
Route::get('entregar/{entregar}/edit','ReservarController@edit');
Route::get('vida/{vida}/vida','ReservarController@vida');
Route::put('vida/{vida}','ReservarController@updatevid');
Route::put('entregar/{entregar}','ReservarController@update');
Route::get('adeudo/{adeudo}/adeudo','ReservarController@adeudo');
Route::put('adeudo/{adeudo}','ReservarController@atualizar');

//constancias
Route::get('generarconstancia','ReportesController@GenerarConstancia');
Route::get('constancia/{constancia}/constancia','ReportesController@constancia');

//este es para editar el perfil
Route::get('perfil/actualizar',['as'=> 'perfil.edit', 'uses' => 'PerfilController@edit']);
Route::patch('perfil/actualizar',['as'=> 'perfil.update', 'uses' => 'PerfilController@update']);

//Route::post('recibir','RecibirController@store');

//Rutas reseteo de contraseña

Route::get('/recover', 'ConnectController@getRecover')->name('recover');
Route::post('/recover', 'ConnectController@postRecover')->name('recover');
Route::get('/reset', 'ConnectController@getReset')->name('reset');

Route::post('/reset', 'ConnectController@postReset')->name('reset');

//mataeriales

Route::get('materials/{materials}/index','MaterialController@subMaterial');

Route::get('submat/{submat}/create','MaterialController@createmat');


Route::post('submat','MaterialController@storemat');

Route::get('confirmar/{confirmar}/confirmar','AlumnoReservas@confirmar');
Route::put('confirmar/{confirmar}','AlumnoReservas@updateconf');
