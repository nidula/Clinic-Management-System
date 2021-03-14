@component('mail::message')
<h1 style="text-align:center;"> Requesting Approval </h1><br>

<p>Dear Sir/Madam,</p><br>

<p>We request your approval regarding the following details of a Laboratory. if the details are verified press the Approve Button if not ignore the email.</p><br>
Lab Name :{{ $data['name'] }}<br>
Lab Email :{{ $data['email'] }}<br>
RegNo : {{ $data['regno']}}<br>
Contact : {{ $data['contact']}}<br>
Address : {{ $data['address']}}<br>

{{ $url = $data['url'] }}
@component('mail::button', ['url' => $url ])
Approve
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
