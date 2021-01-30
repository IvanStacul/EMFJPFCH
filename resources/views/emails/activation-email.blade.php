@component('mail::message')
# Activacion de cuenta

Sigue este link para activar tu cuenta

@component('mail::button', ['url' => route('activate', $user->token)])
Activar
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
