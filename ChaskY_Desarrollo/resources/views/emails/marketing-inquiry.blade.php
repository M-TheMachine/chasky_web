@component('mail::message')
# Nueva Solicitud de Servicios de Marketing

Se ha recibido una nueva solicitud de servicios de marketing con los siguientes detalles:

## Información Básica
**Empresa:** {{ $data['company'] }}
**Industria:** {{ $data['industry'] }}
**Tamaño de empresa:** {{ $data['company_size'] }}

## Objetivos de Marketing
**Objetivos principales:**
{{ $data['objectives'] }}

**Audiencia objetivo:**
{{ $data['target_audience'] }}

## Estrategias Actuales
**Estrategias en uso:**
{{ $data['current_strategies'] }}

**Resultados actuales:**
{{ $data['current_results'] }}

## Canales Preferidos
**Canales de interés:**
@if(isset($data['channels']))
@foreach($data['channels'] as $channel)
- {{ ucfirst($channel) }}
@endforeach
@endif

@if($data['specific_project'])
**Proyecto específico:**
{{ $data['specific_project'] }}
@endif

## Información Adicional
@if($data['additional_info'])
**Información adicional:**
{{ $data['additional_info'] }}
@endif

**Fecha de inicio deseada:** {{ $data['start_date'] }}

@component('mail::button', ['url' => config('app.url')])
Ver Panel de Admin
@endcomponent

Saludos,<br>
{{ config('app.name') }}
@endcomponent
