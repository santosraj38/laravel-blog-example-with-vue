@component('mail::message')
# Welcome To PostUpdatedMail Class Mailable

This is the body of your message. View views.emails.posts.postupdatedmail to edit and update mail

@component('mail::button', ['url' => url('/')])
Visit
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
