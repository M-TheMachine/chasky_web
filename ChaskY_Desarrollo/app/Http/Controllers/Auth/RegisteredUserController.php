<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Seller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Log::info('Usuario creado:', ['user_id' => $user->id, 'name' => $user->name]);

            // Crear un seller asociado al usuario
            $seller = new Seller();
            $seller->name = $request->name;
            $seller->position = 'Vendedor';
            $seller->email = $request->email;
            $seller->phone = '';
            $seller->slug = Str::slug($request->name);
            $seller->user_id = $user->id;
            $seller->company = '';
            $seller->address = '';
            $seller->website = '';
            $seller->whatsapp = '';
            $seller->linkedin = '';
            $seller->bio = '';
            $seller->save();

            Log::info('Seller creado:', ['seller_id' => $seller->id, 'user_id' => $user->id]);

            event(new Registered($user));

            Auth::login($user);

            return redirect(route('dashboard', absolute: false));
        } catch (\Exception $e) {
            Log::error('Error durante el registro:', ['error' => $e->getMessage()]);
            throw $e;
        }
    }
}
