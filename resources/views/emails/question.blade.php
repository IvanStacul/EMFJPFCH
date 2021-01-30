@component('mail::message')
# Consulta de un usuario

Recibiste la siguiente consulta de {{ $message['email'] }}:

{{ $message['content'] }}

@endcomponent
