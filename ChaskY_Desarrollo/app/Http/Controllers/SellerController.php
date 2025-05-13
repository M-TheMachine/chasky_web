<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class SellerController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    protected $imageManager;

    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
        $this->imageManager = new ImageManager(new Driver());
    }

    public function index()
    {
        $sellers = auth()->user()->sellers;
        return view('sellers.index', compact('sellers'));
    }

    public function create()
    {
        return view('sellers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'required|email|unique:sellers,email',
            'phone' => 'required|string|max:20',
            'whatsapp' => 'nullable|string|max:20',
            'linkedin' => 'nullable|url|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $seller = new Seller($validated);
        $seller->slug = Str::slug($validated['name']);
        $seller->user_id = auth()->id();

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('sellers', 'public');
            $seller->photo = $path;
        }

        $seller->save();

        return redirect()->route('sellers.show', $seller->slug)
            ->with('success', __('Perfil creado exitosamente'));
    }

    public function show($slug)
    {
        $seller = Seller::where('slug', $slug)->firstOrFail();
        return view('sellers.show', compact('seller'));
    }

    public function edit($slug)
    {
        $seller = Seller::where('slug', $slug)
            ->where('user_id', auth()->id())
            ->firstOrFail();
            
        $data = [
            'seller' => $seller,
            'debug_info' => [
                'has_seller' => !is_null($seller),
                'seller_attributes' => $seller ? $seller->toArray() : null,
                'is_authenticated' => auth()->check(),
                'user_id' => auth()->id(),
                'view_exists' => view()->exists('sellers.edit'),
                'layout_exists' => view()->exists('layouts.app')
            ]
        ];
        
        return view('sellers.edit', $data);
    }

    public function update(Request $request, $slug)
    {
        $seller = Seller::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'required|email|unique:sellers,email,' . $seller->id,
            'phone' => 'required|string|max:20',
            'whatsapp' => 'nullable|string|max:20',
            'linkedin' => 'nullable|url|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'company' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'website' => 'nullable|url|max:255',
        ]);

        if ($request->hasFile('photo')) {
            // Eliminar la foto anterior si existe
            if ($seller->photo) {
                Storage::disk('public')->delete($seller->photo);
            }
            $path = $request->file('photo')->store('sellers', 'public');
            $validated['photo'] = $path;
        }

        $seller->update($validated);
        $seller->slug = Str::slug($validated['name']);
        $seller->save();

        return redirect()->route('sellers.show', $seller->slug)
            ->with('success', __('Perfil actualizado exitosamente'));
    }

    public function destroy($slug)
    {
        $seller = Seller::where('slug', $slug)->firstOrFail();
        
        if ($seller->photo) {
            Storage::disk('public')->delete($seller->photo);
        }
        
        $seller->delete();

        return redirect()->route('sellers.index')
            ->with('success', __('Perfil eliminado exitosamente'));
    }

    protected function processAndSaveImage($uploadedFile)
    {
        $image = $this->imageManager->read($uploadedFile);
        
        // Redimensionar la imagen manteniendo la proporción
        $image->scale(width: 400);
        
        // Generar un nombre único para el archivo
        $filename = 'sellers/' . Str::uuid() . '.' . $uploadedFile->getClientOriginalExtension();
        
        // Guardar la imagen procesada
        Storage::disk('public')->put($filename, $image->toJpeg(80));
        
        return $filename;
    }
}
