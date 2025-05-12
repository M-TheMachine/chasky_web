<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    public function index()
    {
        $sellers = Seller::all();
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
        $seller = Seller::where('slug', $slug)->firstOrFail();
        return view('sellers.edit', compact('seller'));
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
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
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
}
