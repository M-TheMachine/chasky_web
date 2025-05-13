<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seller;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sellers = [
            [
                'name' => 'Ana María López',
                'position' => 'Gerente de Ventas',
                'email' => 'ana.lopez@chasky.com',
                'phone' => '+51 987 654 321',
                'whatsapp' => '+51987654321',
                'linkedin' => 'https://linkedin.com/in/ana-lopez',
                'bio' => 'Especialista en soluciones digitales con más de 8 años de experiencia en el sector tecnológico.',
                'slug' => 'ana-lopez'
            ],
            [
                'name' => 'Carlos Rodríguez',
                'position' => 'Consultor de Marketing Digital',
                'email' => 'carlos.rodriguez@chasky.com',
                'phone' => '+51 987 654 322',
                'whatsapp' => '+51987654322',
                'linkedin' => 'https://linkedin.com/in/carlos-rodriguez',
                'bio' => 'Experto en estrategias de marketing digital y optimización de conversiones.',
                'slug' => 'carlos-rodriguez'
            ],
            [
                'name' => 'María Fernanda Torres',
                'position' => 'Asesora de Soluciones Tecnológicas',
                'email' => 'maria.torres@chasky.com',
                'phone' => '+51 987 654 323',
                'whatsapp' => '+51987654323',
                'linkedin' => 'https://linkedin.com/in/maria-torres',
                'bio' => 'Especializada en desarrollo web y aplicaciones móviles para empresas en crecimiento.',
                'slug' => 'maria-torres'
            ]
        ];

        foreach ($sellers as $seller) {
            try {
                \Log::info('Creando usuario:', ['name' => $seller['name'], 'email' => $seller['email']]);
                
                // Crear un usuario primero
                $user = \App\Models\User::create([
                    'name' => $seller['name'],
                    'email' => $seller['email'],
                    'password' => bcrypt('password'),
                ]);

                \Log::info('Usuario creado:', ['user_id' => $user->id]);

                // Asignar el user_id al seller y crearlo
                $seller['user_id'] = $user->id;
                $newSeller = Seller::create($seller);

                \Log::info('Seller creado:', ['seller_id' => $newSeller->id]);
            } catch (\Exception $e) {
                \Log::error('Error al crear seller:', [
                    'error' => $e->getMessage(),
                    'name' => $seller['name'],
                    'email' => $seller['email']
                ]);
                throw $e;
            }
        }
    }
}
