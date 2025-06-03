@component('mail::message')
# Nueva Solicitud de Diseño UX/UI

Se ha recibido una nueva solicitud de servicio de diseño UX/UI:

**Nombre:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
@if($data['company'])
**Empresa:** {{ $data['company'] }}  
@endif
**Tipo de Proyecto:** {{ $data['project_type'] }}  
**Fecha de inicio:** {{ $data['timeline'] }}

**Descripción del Proyecto:**  
{{ $data['description'] }}

@component('mail::button', ['url' => config('app.url')])
Ver en el Panel
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
