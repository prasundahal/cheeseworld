@component('mail::message')
# Email via web

@component('mail::table')
|        |          |
| ------------- | --------:|
| Name      | {{$data['first_name']}} {{$data['last_name']}}      |
| Email      | {{$data['email']}}      |
| Phone      | {{$data['phone']}}      |
| Message      | {{$data['message']}}      |
| Address      | {{$data['address']}}      |
| Postal_code      | {{$data['postal_code']}}      |
| Province      | {{$data['province']}}      |
| Town      | {{$data['town']}}      |
@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent
