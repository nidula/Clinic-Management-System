@component('mail::message')
<h1 style="text-align:center;"> A new record has been added</h1><br>
<p>Dear User,</p><br>

<p>A new record has been added to your account. if you want view the record press the <strong>"View Record"</strong> button below.</p><br>

{{ $url = $data }}

@component('mail::button', ['url' => $url])
View Record
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
