@component('mail::message')
# Nueva Postulación para Pasantías

Se ha recibido una nueva postulación para el área de **{{ $data['area'] }}**.

**Detalles del postulante:**
- Nombre: {{ $data['datos']['nombre'] }}
- Email: {{ $data['datos']['email'] }}
- Teléfono: {{ $data['datos']['telefono'] }}
- Universidad: {{ $data['datos']['universidad'] }}
- Carrera: {{ $data['datos']['carrera'] }}
- Semestre: {{ $data['datos']['semestre'] }}

**Mensaje del postulante:**
{{ $data['datos']['mensaje'] }}

@if(isset($data['datos']['portafolio']))
**Portafolio:** {{ $data['datos']['portafolio'] }}
@endif

@if(isset($data['datos']['experiencia']))
**Experiencia:**
{{ $data['datos']['experiencia'] }}
@endif

Se ha adjuntado el CV del postulante a este correo.

El CV del postulante está adjunto a este correo.

Saludos,<br>
{{ config('app.name') }}
@endcomponent
