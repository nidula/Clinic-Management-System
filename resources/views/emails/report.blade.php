@component('mail::message')
<h1 style="text-align:center;"> A new Report has been added </h1><br>
<p>Dear User,</p><br>

<p>A new report has been added to your account. if you want view the report press the <strong>"View Report"</strong> button below.</p><br>


Hospital Details for {{ $data['topic'] }}

Lab Name :{{ $data['name'] }}<br>
Lab Email :{{ $data['email'] }}<br>
Contact : {{ $data['contact']}}<br>
Address : {{ $data['address']}}<br>

{{ $url = $data['url'] }}


@component('mail::button', ['url' => $url ])
View Report
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
