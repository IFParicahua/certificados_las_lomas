<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Livewire\DataMecanicaComponent;
use App\Http\Livewire\DataQuimicoComponent;
use App\Http\Livewire\DataCertificadoComponent;
use App\Http\Livewire\DataNewCertificado;

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
    return view('welcome');
})->name('index');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/datos_mecanicos_geometricos', DataMecanicaComponent::class)->name('datos.mecanicos.geometricos');
    Route::get('/datos_quimicos', DataQuimicoComponent::class)->name('datos.quimicos');
    Route::get('/certificados', DataCertificadoComponent::class)->name('certificados');
    Route::get('/save_certify', DataNewCertificado::class)->name('save.certify');
    Route::get('/certificado_pdf/{id}', [App\Http\Controllers\CertifyPdfController::class, 'showPDF'])->name('certificado_pdf','.*');
});
