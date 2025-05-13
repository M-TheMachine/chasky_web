<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        Log::info('Usuario actual:', ['user_id' => $user->id, 'name' => $user->name]);

        // Obtenemos los sellers del usuario
        $sellers = $user->sellers;
        Log::info('Sellers encontrados:', [
            'count' => $sellers->count(),
            'seller_data' => $sellers->toArray()
        ]);

        $data = [
            'sellers' => $sellers,
            'debug_info' => [
                'has_sellers' => $sellers->isNotEmpty(),
                'sellers_count' => $sellers->count(),
                'is_authenticated' => auth()->check(),
                'user_id' => auth()->id(),
                'template_used' => 'layouts.app',
                'section_content' => 'content',
                'view_exists' => view()->exists('dashboard'),
                'layout_exists' => view()->exists('layouts.app')
            ]
        ];
        Log::info('Datos enviados a la vista:', $data);
        return view('dashboard', $data);
    }
} 