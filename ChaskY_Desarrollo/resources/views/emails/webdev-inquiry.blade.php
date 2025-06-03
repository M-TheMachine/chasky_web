@component('mail::message')
# Nueva Solicitud de Desarrollo Web

Se ha recibido una nueva solicitud de desarrollo web con los siguientes detalles:

**Nombre:** {{ $data['name'] }}
**Email:** {{ $data['email'] }}

## Detalles del Proyecto
**Tipo de Proyecto:** {{ ucfirst($data['project_type']) }}
**Presupuesto:** {{ $data['budget'] }}
**Fecha de inicio:** {{ $data['timeline'] }}

**Descripción del Proyecto:**
{{ $data['description'] }}

@component('mail::button', ['url' => config('app.url')])
Ver Panel de Admin
@endcomponent

Saludos,<br>
{{ config('app.name') }}
@endcomponent
