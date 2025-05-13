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

        $seller = $user->seller;
        Log::info('Seller encontrado:', [
            'seller' => $seller ? 'sí' : 'no',
            'seller_data' => $seller ? $seller->toArray() : null
        ]);

        // Si no existe el seller, lo creamos
        if (!$seller) {
            try {
                $seller = new Seller();
                $seller->name = $user->name;
                $seller->position = 'Vendedor';
                $seller->email = $user->email;
                $seller->phone = '';
                $seller->slug = Str::slug($user->name);
                $seller->user_id = $user->id;
                $seller->company = '';
                $seller->address = '';
                $seller->website = '';
                $seller->whatsapp = '';
                $seller->linkedin = '';
                $seller->bio = '';
                $seller->save();

                Log::info('Seller creado exitosamente:', ['seller_id' => $seller->id]);

                // Recargamos el seller
                $seller = $user->seller()->fresh();
                Log::info('Seller recargado:', ['seller' => $seller ? 'sí' : 'no']);
            } catch (\Exception $e) {
                Log::error('Error al crear seller:', ['error' => $e->getMessage()]);
                return view('dashboard', ['seller' => null, 'error' => $e->getMessage()]);
            }
        }

        $data = [
            'seller' => $seller,
            'debug_info' => [
                'has_seller' => !is_null($seller),
                'seller_attributes' => $seller ? $seller->toArray() : null,
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