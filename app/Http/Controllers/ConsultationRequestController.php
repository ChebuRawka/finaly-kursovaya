<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsultationRequest;

class ConsultationRequestController extends Controller
{

    public function index()
    {
        // Получение всех заявок
        $requests = ConsultationRequest::all();

        // Возврат представления с заявками
        return view('admin.consultation_requests.index', compact('requests'));
    }

    public function test(){

        return view('admin.consultation_requests.index');
    }

    public function store(Request $request)
    {
        // Валидация данных формы
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
        ]);
        $user = auth()->user();

        // Сохранение данных в базу данных
        $consultationRequest = ConsultationRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_id' => $user->User_id,
            'status' => 'pending'
        ]);

        // Возврат на ту же страницу с сообщением об успехе
        return redirect()->back()->with('success', 'Заявка отправлена успешно!');

    }
    // Метод для обновления статуса заявки (для администратора)
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $consultationRequest = ConsultationRequest::findOrFail($id);
        $consultationRequest->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Статус заявки обновлен успешно!');
    }

    // Метод для отображения заявок пользователя
    public function userRequests()
    {
        // Получаем текущего аутентифицированного пользователя
        $user = Auth::user();

        // Проверяем, что пользователь загружен (для безопасности)
        if (!$user) {
            return redirect()->route('login')->with('error', 'Пожалуйста, войдите в систему.');
        }

        // Получаем заявки текущего пользователя через отношение consultationRequests
        $requests = $user->consultationRequests;

        // Возвращаем представление с заявками пользователя
        return view('user.consultation-requests.index', compact('requests'));
    }

    // Метод для отображения пользовательской панели
    public function dashboard()
    {
        return view('dashboard');
    }
}
