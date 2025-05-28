@component('mail::message')
# Nueva Postulación para Prácticas

Se ha recibido una nueva postulación para el programa de prácticas en {{ $data['position'] }}.

**Detalles del postulante:**
- Nombre: {{ $data['name'] }}
- Email: {{ $data['email'] }}
- Teléfono: {{ $data['phone'] }}
- Universidad: {{ $data['university'] }}

**¿Por qué quiere hacer prácticas en Chasky?**
{{ $data['why_apply'] }}

@if(isset($data['portfolio']))
**Portafolio:** {{ $data['portfolio'] }}
@endif

@if(isset($data['demo_reel']))
**Demo Reel:** {{ $data['demo_reel'] }}
@endif

El CV del postulante está adjunto a este correo.

Saludos,<br>
{{ config('app.name') }}
@endcomponent
