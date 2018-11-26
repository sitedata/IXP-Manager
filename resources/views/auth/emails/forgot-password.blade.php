@component('mail::message')


To whom it may concern,

You, or someone purporting to be you, has requested a password reset for <?= config( "identity.sitename" ) ?>.

If you wish to proceed, please click on the following link:


@component('mail::button', ['url' => route( "reset-password@show-reset-form", [ "token" => $token, "username" => $user->getUsername() ] ), 'color' => 'blue'])
    Reset password
@endcomponent

If you did not make this request, please contact our support team.


Thanks and kind regards,

{{ config( 'identity.name' ) }}

[{{ config( 'identity.email' ) }}](mailto:{{ config( 'identity.email' ) }})

@endcomponent