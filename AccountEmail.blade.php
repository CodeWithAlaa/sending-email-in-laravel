@component('mail::message')
Votre Compte Sera Desactiver pour le moment


@component('mail::panel', ['url' => ''])
     votre compte est désactiver, donc les client ne pourront plus voir votre profil ni vous rechercher
@endcomponent

@component('mail::button', ['url' => ''])
Aller au site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent