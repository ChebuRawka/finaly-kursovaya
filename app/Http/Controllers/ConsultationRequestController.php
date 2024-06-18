<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsultationRequest;

class ConsultationRequestController extends Controller
{
    public function store(Request $request)
    {
        // Валидация данных формы
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Сохранение данных в базу данных
        $consultationRequest = ConsultationRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        // Возврат на ту же страницу с сообщением об успехе
        return redirect()->back()->with('success', 'Заявка отправлена успешно!');
    }
}
