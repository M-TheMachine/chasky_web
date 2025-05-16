@php
    $title = "Mujeres al Volante";
    $subtitle = "Aplicación de movilidad segura para mujeres";
    $featured_image = "https://images.unsplash.com/photo-1593526421301-b909ba2a1979?ixlib=rb-4.0.3";
    $category = "Desarrollo Móvil";
    $description = "Mujeres al Volante es una aplicación móvil innovadora diseñada para brindar una solución de transporte segura exclusivamente para mujeres. La plataforma conecta a conductoras con pasajeras, garantizando viajes confiables en un entorno protegido.";
    $client = "Fundación Seguridad Femenina";
    $date = "Marzo 2025";
    $services = "Desarrollo Móvil, Diseño UX/UI, Backend";
    $tech = "React Native, Firebase, Google Maps API, Stripe";
    $website_url = "#";
    
    $challenge = "La inseguridad en el transporte público y los servicios tradicionales de ride-hailing es una preocupación constante para muchas mujeres. La Fundación Seguridad Femenina nos planteó el desafío de crear una plataforma que abordara esta problemática, priorizando la seguridad y confianza para las usuarias.";
    
    $solution = "Desarrollamos una aplicación móvil completa con funciones específicas de seguridad como verificación de identidad, botón de pánico con conexión directa a servicios de emergencia, compartir ruta en tiempo real con contactos de confianza, y un sistema de calificación riguroso. Implementamos también un proceso de verificación exhaustivo para las conductoras y un sistema de coincidencia inteligente basado en preferencias y rutas habituales.";
    
    $results = "La aplicación ha alcanzado más de 50,000 usuarias en los primeros tres meses de lanzamiento, con una tasa de crecimiento mensual del 35%. Se han registrado más de 15,000 viajes completados con una calificación promedio de 4.8/5. La aplicación ha sido destacada en medios nacionales como una iniciativa innovadora para la seguridad de las mujeres.";
    
    $features = [
        [
            'icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z',
            'title' => 'Sistema de seguridad avanzado',
            'description' => 'Botón de pánico, compartir ruta en tiempo real y verificación de identidad para garantizar la seguridad en cada viaje.'
        ],
        [
            'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z',
            'title' => 'Geolocalización inteligente',
            'description' => 'Sistema de rutas optimizadas con alertas de zonas seguras y sugerencias de puntos de encuentro verificados.'
        ],
        [
            'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
            'title' => 'Comunidad verificada',
            'description' => 'Riguroso proceso de verificación para usuarias y conductoras, con revisión de antecedentes y validación de documentos.'
        ],
    ];
    
    $gallery = [
        "https://images.unsplash.com/photo-1570125909232-eb263c188f7e?ixlib=rb-4.0.3",
        "https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3",
        "https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3",
        "https://images.unsplash.com/photo-1610149968791-df5bd30b14c1?ixlib=rb-4.0.3",
        "https://images.unsplash.com/photo-1583267682231-400c8c4fcb91?ixlib=rb-4.0.3",
        "https://images.unsplash.com/photo-1605538948446-25cdb3d0de60?ixlib=rb-4.0.3",
    ];
    
    $testimonial = [
        'text' => "Mujeres al Volante ha revolucionado la forma en que me transporto diariamente. Como usuaria, me siento finalmente segura y tranquila durante mis trayectos. Como fundación, estamos orgullosos de trabajar con Chasky en una solución tecnológica que aborda un problema social real con un enfoque innovador y efectivo.",
        'name' => 'Ana Martínez',
        'position' => 'Directora',
        'company' => 'Fundación Seguridad Femenina',
        'avatar' => 'https://randomuser.me/api/portraits/women/42.jpg'
    ];
    
    $related_projects = [
        [
            'image' => 'https://images.unsplash.com/photo-1615719413546-198b25453f85?ixlib=rb-4.0.3',
            'title' => 'E-commerce KOKO',
            'description' => 'Plataforma de pedidos online para el restaurante de comida rápida KOKO con gestión de órdenes en tiempo real.',
            'url' => '/portafolio/koko'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-4.0.3',
            'title' => 'Galeno Quiz Médico',
            'description' => 'Plataforma educativa de quizzes para profesionales médicos con seguimiento de progreso.',
            'url' => '/portafolio/galeno'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3',
            'title' => 'HealthTech App',
            'description' => 'Revolucionamos el seguimiento de la salud con IA y análisis en tiempo real.',
            'url' => '#'
        ],
    ];
@endphp

@extends('layouts.project-detail')
