@component('mail::message')
Hello {{$data['friend_name']}},{{$data['your_name']}}

Click Here

@component('mail::button', ['url' =>$data['jobUrl']])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
