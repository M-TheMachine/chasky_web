@component('mail::message')
# Nueva Solicitud de Nearshoring

Se ha recibido una nueva solicitud de servicio de nearshoring:

**Nombre:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Empresa:** {{ $data['company'] }}  
**Tamaño del Equipo:** {{ $data['team_size'] }}  
**Duración del Proyecto:** {{ $data['project_duration'] }}  
**Fecha de Inicio:** {{ $data['start_date'] }}

**Habilidades Requeridas:**  
{{ $data['skills_needed'] }}

@component('mail::button', ['url' => config('app.url')])
Ver en el Panel
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
