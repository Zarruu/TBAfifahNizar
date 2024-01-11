<?php
use App\Http\Controllers\medicineController;
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
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/dashboardtable', function () {
    return view('dashboardtable');
});

Route::get('/medicine', function () {
    return view('medicine.medicine');
});

Route::get('/dokter', function () {
    return view('dokter');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('medicine/index',[medicineController::class, 'index'])->name('index.medicine');
// Route::get('/dashboard',[medicineController::class, 'dashboard'])->name('dashboard.medicine');
Route::get('medicine/create',[medicineController::class, 'create'])->name('create.medicine');
//Route::get('medicine-add', [medicineController::class, 'create'])->name();
Route::post('medicine/simpan',[medicineController::class, 'simpan'])->name('simpan.medicine');
Route::post('medicine/update/{id}',[medicineController::class, 'update'])->name('update.medicine');
Route::get('medicine/edit/{id}',[medicineController::class, 'edit'])->name('edit.medicine');
Route::post('medicine/delete{id}', [medicineController::class, 'delete'])->name('delete.medicine');
