<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExportKuesionerController;
use App\Http\Controllers\GetNimController;
use App\Http\Controllers\KuesionerAlumniController;
use App\Http\Controllers\KuesionerPerusahaanController;
use App\Http\Controllers\KuisionerAwalController;
use App\Http\Controllers\KuisionerawalController as ControllersKuisionerawalController;
use App\Http\Controllers\MakeKuesionerController;
use App\Http\Controllers\RiwayatKerjaController;
use App\Http\Controllers\UpdateMeController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('forgot-nim', GetNimController::class)->name('get.nim');

Route::get('/kuisioner', [ControllersKuisionerawalController::class, 'index'])->name('kuisioner.index');

Route::get('/create', [ControllersKuisionerawalController::class , 'create'])->name('kuisioner.create');
Route::post('/create', [ControllersKuisionerawalController::class , 'postcreate'])->name('kuisioner.postcreate');

Route::get('/create1', [ControllersKuisionerawalController::class , 'create1'])->name('kuisioner.create1');
Route::post('/create1', [ControllersKuisionerawalController::class , 'postcreate1'])->name('kuisioner.postcreate1');

Route::get('/create2', [ControllersKuisionerawalController::class , 'create2'])->name('kuisioner.create2');
Route::post('/create2', [ControllersKuisionerawalController::class , 'postcreate2'])->name('kuisioner.postcreate2');
 
Route::get('/create3', [ControllersKuisionerawalController::class , 'create3'])->name('kuisioner.create3');
Route::post('/create3', [ControllersKuisionerawalController::class , 'postcreate3'])->name('kuisioner.postcreate3');

// i test my kuesioner right?

// Route::get('create-kuesioner', [MakeKuesionerController::class, 'create'])->name('create.kuesioner.maker');
// Route::post('store-kuesioner', [MakeKuesionerController::class, 'store'])->name('store.kuesioner.maker');
// Route::get('index-kuesioner', [MakeKuesionerController::class, 'index'])->name('index.kuesioner.maker');
// Route::get('edit-kuesioner/{kuesioner}/edit', [MakeKuesionerController::class, 'edit'])->name('edit.kuesioner.maker');
// Route::put('update-kuesioner/{kuesioner}', [MakeKuesionerController::class, 'update'])->name('update.kuesioner.maker');
// Route::delete('delete-kuesioner/{kuesioner}', [MakeKuesionerController::class, 'destroy'])->name('delete.kuesioner.maker');

//

Route::middleware('auth')->group(function () {
    Route::get('/home', DashboardController::class)->name('dashboard');

    Route::middleware('role:admin')->group(function () {
        Route::get('alumni',  [UserController::class, 'indexAlumni'])->name('alumni.index');
        Route::get('alumni/create',  [UserController::class, 'createAlumni'])->name('alumni.create');
        Route::post('alumni',  [UserController::class, 'storeAlumni'])->name('alumni.store');
        Route::delete('alumni/{user}',  [UserController::class, 'destroyAlumni'])->name('alumni.destroy');
        Route::put('alumni/{user}',  [UserController::class, 'updateAlumni'])->name('alumni.update');
        Route::get('alumni/{user}',  [UserController::class, 'showAlumni'])->name('alumni.show');
        Route::get('alumni/{user}/edit',  [UserController::class, 'editAlumni'])->name('alumni.edit');

        Route::get('exportexcelalumni',  [UserController::class, 'userAlumniExport'])->name('alumni.export');

        Route::get('importalumni',  [UserController::class, 'createImportAlumni'])->name('import.alumni.create');
        Route::post('importalumni',  [UserController::class, 'storeImportAlumni'])->name('import.alumni.store');

        Route::delete('alumni.deleteall',  [UserController::class, 'alumniAllDelete'])->name('alumni.alldelete');

        Route::get('perusahaan',  [UserController::class, 'indexPerusahaan'])->name('perusahaan.index');
        Route::get('perusahaan/create',  [UserController::class, 'createPerusahaan'])->name('perusahaan.create');
        Route::post('perusahaan',  [UserController::class, 'storePerusahaan'])->name('perusahaan.store');
        Route::delete('perusahaan/{user}',  [UserController::class, 'destroyPerusahaan'])->name('perusahaan.destroy');
        Route::put('perusahaan/{user}',  [UserController::class, 'updatePerusahaan'])->name('perusahaan.update');
        Route::get('perusahaan/{user}',  [UserController::class, 'showPerusahaan'])->name('perusahaan.show');
        Route::get('perusahaan/{user}/edit',  [UserController::class, 'editPerusahaan'])->name('perusahaan.edit');

        Route::get('exportexcelperusahaan',  [UserController::class, 'userPerusahaanExport'])->name('perusahaan.export');

        Route::get('importperusahaan',  [UserController::class, 'createImportPerusahaan'])->name('import.perusahaan.create');
        Route::post('importperusahaan',  [UserController::class, 'storeImportPerusahaan'])->name('import.perusahaan.store');

        Route::delete('perusahaan.deleteall',  [UserController::class, 'perusahaanAllDelete'])->name('perusahaan.alldelete');

        Route::get('/exportkuesioner', [ExportKuesionerController::class, 'index'])->name('export.kuesioner');

        Route::get('/exportexcelkuesioneralumni', [ExportKuesionerController::class, 'kuesionerAlumniExport'])->name('kuesioner.alumni.export');
        Route::get('/exportexcelkuesionerperusahaan', [ExportKuesionerController::class, 'kuesionerPerusahaanExport'])->name('kuesioner.perusahaan.export');

        Route::get('/exportriwayatkerja', [RiwayatKerjaController::class, 'exportRiwayatKerja'])->name('export.riwayatkerja');
        Route::get('/exportexcelriwayatkerja',  [RiwayatKerjaController::class, 'exportExcelRiwayatKerja'])->name('exportexcel.riwayatkerja');
    });

    Route::middleware('role:alumni')->group(function () {
        Route::get('imalumni/{user:identifier}/edit',  [UpdateMeController::class, 'editAlumni'])->name('alumniMe.edit');
        Route::put('imalumni/{user:identifier}',  [UpdateMeController::class, 'updateAlumni'])->name('alumniMe.update');

        Route::get('kuesioneralumni-start', [KuesionerAlumniController::class, 'index'])->name('kuesioner.alumni.index');
        Route::post('kuesioneralumni-start', [KuesionerAlumniController::class, 'store'])->name('kuesioner.alumni.store');
        Route::get('kuesioneralumni-page-one/{kuesionerAlumni}/edit', [KuesionerAlumniController::class, 'edit'])->name('kuesioner.alumni.edit');
        Route::put('kuesioneralumni-page-one/{kuesionerAlumni}', [KuesionerAlumniController::class, 'update'])->name('kuesioner.alumni.update');
        Route::get('kuesioneralumni-page-two/{kuesionerAlumni}/edit', [KuesionerAlumniController::class, 'edit2'])->name('kuesioner.alumni.edit2');
        Route::put('kuesioneralumni-page-two/{kuesionerAlumni}', [KuesionerAlumniController::class, 'update2'])->name('kuesioner.alumni.update2');
        Route::get('kuesioneralumni-page-three/{kuesionerAlumni}/edit', [KuesionerAlumniController::class, 'edit3'])->name('kuesioner.alumni.edit3');
        Route::put('kuesioneralumni-page-three/{kuesionerAlumni}', [KuesionerAlumniController::class, 'update3'])->name('kuesioner.alumni.update3');
        Route::get('kuesioneralumni-page-four/{kuesionerAlumni}/edit', [KuesionerAlumniController::class, 'edit4'])->name('kuesioner.alumni.edit4');
        Route::put('kuesioneralumni-page-four/{kuesionerAlumni}', [KuesionerAlumniController::class, 'update4'])->name('kuesioner.alumni.update4');
        Route::get('kuesioneralumni-page-five/{kuesionerAlumni}/edit', [KuesionerAlumniController::class, 'edit5'])->name('kuesioner.alumni.edit5');
        Route::put('kuesioneralumni-page-five/{kuesionerAlumni}', [KuesionerAlumniController::class, 'update5'])->name('kuesioner.alumni.update5');
        Route::get('kuesioneralumni-page-six/{kuesionerAlumni}/edit', [KuesionerAlumniController::class, 'edit6'])->name('kuesioner.alumni.edit6');
        Route::put('kuesioneralumni-page-six/{kuesionerAlumni}', [KuesionerAlumniController::class, 'update6'])->name('kuesioner.alumni.update6');
        Route::get('kuesioneralumni-page-seven/{kuesionerAlumni}/edit', [KuesionerAlumniController::class, 'edit7'])->name('kuesioner.alumni.edit7');
        Route::put('kuesioneralumni-page-seven/{kuesionerAlumni}', [KuesionerAlumniController::class, 'update7'])->name('kuesioner.alumni.update7');

        Route::get('riwayatkerja',  [RiwayatKerjaController::class, 'index'])->name('riwayatkerja.index');
        Route::get('riwayatkerja/create',  [RiwayatKerjaController::class, 'create'])->name('riwayatkerja.create');
        Route::post('riwayatkerja',  [RiwayatKerjaController::class, 'store'])->name('riwayatkerja.store');
        Route::delete('riwayatkerja/{riwayatKerja}',  [RiwayatKerjaController::class, 'destroy'])->name('riwayatkerja.destroy');
        Route::put('riwayatkerja/{riwayatKerja}',  [RiwayatKerjaController::class, 'update'])->name('riwayatkerja.update');
        Route::get('riwayatkerja/{riwayatKerja}',  [RiwayatKerjaController::class, 'show'])->name('riwayatkerja.show');
        Route::get('riwayatkerja/{riwayatKerja}/edit',  [RiwayatKerjaController::class, 'edit'])->name('riwayatkerja.edit');
    });

    Route::middleware('role:perusahaan')->group(function () {
        Route::get('imperusahaan/{user:identifier}/edit',  [UpdateMeController::class, 'editPerusahaan'])->name('perusahaanMe.edit');
        Route::put('imperusahaan/{user}',  [UpdateMeController::class, 'updatePerusahaan'])->name('perusahaanMe.update');

        Route::get('kuesionerperusahaan-start', [KuesionerPerusahaanController::class, 'index'])->name('kuesioner.perusahaan.index');
        Route::post('kuesionerperusahaan-start', [KuesionerPerusahaanController::class, 'store'])->name('kuesioner.perusahaan.store');
        Route::get('kuesionerperusahaan-page-one/{kuesionerPerusahaan}/edit', [KuesionerPerusahaanController::class, 'edit'])->name('kuesioner.perusahaan.edit');
        Route::put('kuesionerperusahaan-page-one/{kuesionerPerusahaan}', [KuesionerPerusahaanController::class, 'update'])->name('kuesioner.perusahaan.update');
        Route::get('kuesionerperusahaan-page-two/{kuesionerPerusahaan}/edit', [KuesionerPerusahaanController::class, 'edit2'])->name('kuesioner.perusahaan.edit2');
        Route::put('kuesionerperusahaan-page-two/{kuesionerPerusahaan}', [KuesionerPerusahaanController::class, 'update2'])->name('kuesioner.perusahaan.update2');
    });
});

require __DIR__.'/auth.php';
