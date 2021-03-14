@component('mail::message')
<h1 style="text-align:center;"> Congratulations!</h1><br>
<p>Dear User,</p><br>

<p>Thank you for registering your Hospital on our website and we would like to inform you that your account has been approved by the respected parties and now you will be able to login to your account using your credentials.</p><br>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
