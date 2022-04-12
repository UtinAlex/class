<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    /**
     * Главная Форма
     */
    public function getForm()
    {
        $hint = 'Введите данные';
        return view('form', ['massage' => $hint]);
    }

    /**
     * Отправляет данные на сайт data
     */
    public function saveContact(Request $request)
    {
        $requestApi = [
            'name' => $request->name,
            'phone' => $request->mobile_number,
        ];
        $ApiJson = json_encode($requestApi, true);
        $response = Http::post('http://localhost:8000/api/save-page', [
            $ApiJson,
        ]);
        $hint = 'Данные отправлены. Можете ввести новые';
        if ($response->successful()) {
            if ($response->body()) {
                $responseArr = [
                'responseArr' => $response->body(),
                'massage' => $hint,
                ];
            }
        }
        
        return view('form', $responseArr);
    }
}
