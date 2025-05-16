@php
    $title = "E-commerce KOKO";
    $subtitle = "Plataforma de pedidos online para el restaurante de comida rápida KOKO";
    $featured_image = "https://images.unsplash.com/photo-1615719413546-198b25453f85?ixlib=rb-4.0.3";
    $category = "Desarrollo Web";
    $description = "KOKO es un restaurante de comida rápida que buscaba optimizar su proceso de pedidos y expandir su alcance. Desarrollamos una plataforma de e-commerce que permite a los clientes realizar pedidos online, con un sistema de gestión en tiempo real para el restaurante.";
    $client = "Restaurante KOKO";
    $date = "Enero 2025";
    $services = "Desarrollo Web, Diseño UX/UI, E-commerce";
    $tech = "Laravel, Vue.js, Tailwind CSS, API Mercado Pago";
    $website_url = "#";
    
    $challenge = "El restaurante KOKO enfrentaba varios desafíos: largas colas en horas pico, dificultad para gestionar pedidos por teléfono y la necesidad de expandir su negocio más allá de su ubicación física. Necesitaban una solución digital que modernizara completamente su operación.";
    
    $solution = "Desarrollamos una plataforma de e-commerce completa con un frontend atractivo e intuitivo para los clientes y un backend robusto para la gestión. Implementamos un sistema de pedidos en tiempo real, gestión de inventario, integración con medios de pago y un panel de administración personalizado. El sistema también incluye funcionalidades para seguimiento de pedidos, recompensas por fidelidad y campañas promocionales.";
    
    $results = "Desde el lanzamiento de la plataforma, KOKO ha experimentado un aumento del 45% en ventas totales, una reducción del 35% en tiempos de espera en el local y un incremento del 60% en la frecuencia de compra de clientes habituales. La plataforma procesa actualmente más de 500 pedidos diarios.";
    
    $features = [
        [
            'icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z',
            'title' => 'Carrito de compras intuitivo',
            'description' => 'Diseñado para maximizar la conversión, con opciones de personalización de productos y proceso de pago optimizado.'
        ],
        [
            'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
            'title' => 'Sistema de seguimiento',
            'description' => 'Los clientes pueden seguir su pedido en tiempo real desde la preparación hasta la entrega.'
        ],
        [
            'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
            'title' => 'Dashboard administrativo',
            'description' => 'Panel de control completo para gestionar pedidos, inventario, promociones y analíticas de ventas.'
        ],
    ];
    
    $gallery = [
        "https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?ixlib=rb-4.0.3",
        "https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3",
        "https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-4.0.3",
        "https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixlib=rb-4.0.3",
        "https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixlib=rb-4.0.3",
        "https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?ixlib=rb-4.0.3",
    ];
    
    $testimonial = [
        'text' => "La implementación del e-commerce ha transformado nuestro negocio. No solo hemos aumentado nuestras ventas, sino que también hemos mejorado significativamente la experiencia de nuestros clientes. El equipo de Chasky entendió perfectamente nuestras necesidades y entregó un producto que superó nuestras expectativas.",
        'name' => 'Carlos Mendoza',
        'position' => 'Gerente General',
        'company' => 'Restaurante KOKO',
        'avatar' => 'https://randomuser.me/api/portraits/men/32.jpg'
    ];
    
    $related_projects = [
        [
            'image' => 'https://images.unsplash.com/photo-1593526421301-b909ba2a1979?ixlib=rb-4.0.3',
            'title' => 'Mujeres al Volante',
            'description' => 'Aplicación que conecta a mujeres conductoras con pasajeras para garantizar viajes seguros.',
            'url' => '/portafolio/mujeres-al-volante'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-4.0.3',
            'title' => 'Galeno Quiz Médico',
            'description' => 'Plataforma educativa de quizzes para profesionales médicos con seguimiento de progreso.',
            'url' => '/portafolio/galeno'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3',
            'title' => 'E-commerce Innovation',
            'description' => 'Transformamos la experiencia de compra online con tecnología de punta.',
            'url' => '#'
        ],
    ];
@endphp

@extends('layouts.project-detail')
