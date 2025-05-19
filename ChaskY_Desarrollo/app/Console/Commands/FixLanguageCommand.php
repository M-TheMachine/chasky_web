<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class FixLanguageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'language:fix {locale=en : The locale to set (en/es)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Corrige problemas de configuración de idioma';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $locale = $this->argument('locale');
        
        if (!in_array($locale, ['en', 'es'])) {
            $this->error("Idioma no válido. Use 'en' o 'es'");
            return 1;
        }
        
        $this->info("Reiniciando configuración de idioma a {$locale}...");
        
        // Borrar caché
        Cache::flush();
        $this->info('Caché borrada');
        
        // Borrar cookies y sesiones en la base de datos
        try {
            DB::table('sessions')->truncate();
            $this->info('Sesiones de base de datos borradas');
        } catch (\Exception $e) {
            $this->warn('No se pudieron borrar las sesiones: ' . $e->getMessage());
        }
        
        // Establecer la configuración en el archivo .env
        $this->setEnvValue('APP_LOCALE', $locale);
        $this->info("APP_LOCALE establecido a {$locale} en .env");
        
        // Regenerar la configuración
        $this->call('config:clear');
        $this->call('route:clear');
        $this->call('view:clear');
        $this->call('optimize:clear');
        
        $this->info('¡Listo! La aplicación ahora debería usar el idioma ' . $locale);
        
        return 0;
    }
    
    /**
     * Set or update an environment variable value in the .env file.
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    protected function setEnvValue($key, $value)
    {
        $path = app()->environmentFilePath();
        
        if (file_exists($path)) {
            $content = file_get_contents($path);
            
            // If the key exists, replace its value
            if (strpos($content, $key . '=') !== false) {
                $content = preg_replace('/' . $key . '=.*/', $key . '=' . $value, $content);
            } else {
                // If the key doesn't exist, append it to the end of the file
                $content .= "\n" . $key . '=' . $value;
            }
            
            file_put_contents($path, $content);
        }
    }
}
