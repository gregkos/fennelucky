<x-mail::message>
# Hello

Thank you for using our platform! Your access token is:

<x-mail::panel>
{{ $token->plainTextToken }}
</x-mail::panel>

Use that as a bearer token to interact with our API. It will expire at {{ $token->accessToken->expires_at->toDateTimeString() }} UTC.

__PLEASE NOTE__: *Any previous tokens you might have had are now invalidated.*

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
