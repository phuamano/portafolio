<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreContactMessageRequest;
use App\Models\ContactMessage;  

class ContactMessageController extends Controller
{
    public function store(StoreContactMessageRequest $request): JsonResponse    
    {
        ContactMessage::create($request->validated());

        return response()->json(['message' => 'Mensaje enviado correctamente.'], 201);
    }
}
