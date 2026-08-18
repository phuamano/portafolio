<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Technology;

class TechnologyController extends Controller
{
    public function index(): JsonResponse
    {
        $technolgies = Technology::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return response()->json($technolgies);
    }
}
