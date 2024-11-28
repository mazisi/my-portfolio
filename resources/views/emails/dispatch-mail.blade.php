<x-mail::message>
# Hello, Mazisi

You have received a message from <b>{{ $name }}</b> via contact form.

Name: {{ $name }}<br>
Phone: {{ $phone }}<br>
Email: {{ $email }}<br>
Subject: {{ $subject }}<br><br>
Message: {{ $message }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
