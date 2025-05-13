@component('mail::message')
# Nuevo mensaje de contacto

Se ha recibido un nuevo mensaje de contacto con los siguientes detalles:

**Nombre:** {{ $datos['nombre'] }}  
**Email:** {{ $datos['email'] }}  
**Teléfono:** {{ $datos['telefono'] }}  
**Asunto:** {{ $datos['asunto'] }}

**Mensaje:**  
{{ $datos['mensaje'] }}

Gracias,<br>
{{ config('app.name') }}
@endcomponent
