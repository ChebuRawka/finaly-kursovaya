<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultationRequestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
// Маршрут для административной панели
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/consultation-requests', [ConsultationRequestController::class, 'index'])->name('admin.consultation-requests.index');
    Route::post('/admin/consultation-requests/{id}/update-status', [ConsultationRequestController::class, 'updateStatus'])->name('admin.consultation-requests.update_status');
});

// Маршрут для отображения заявок пользователей
Route::middleware('auth')->group(function () {
    Route::get('/user/consultation-requests', [ConsultationRequestController::class, 'userRequests'])->name('user.consultation-requests.index');
});

// Маршрут для обработки заявок от пользователей
Route::post('/consultation-request', [ConsultationRequestController::class, 'store'])->name('consultation.request');

// Маршрут для отображения дашборда пользователя
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user(); // Получаем текущего пользователя

        $requests = $user->consultationRequests()->get(); // Используем () для вызова метода отношения
        return view('dashboard', compact('requests'));
    })->name('dashboard');
});

// Маршрут для отображения главной страницы
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Дополнительные маршруты для аутентификации и профиля пользователя
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'edit'])->middleware('auth')->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->middleware('auth')->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware('auth')->name('profile.destroy');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');













