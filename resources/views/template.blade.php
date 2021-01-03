@component('mail::message')
# Someone interacted with your tweet.

The user {{$user}} has commented on your tweet!

@component('mail::button', ['url' => 'websitecoursework.test/tweet/'. $post])
View post
@endcomponent


{{ config('app.name') }}
@endcomponent
