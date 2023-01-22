<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $subject }}</title>
</head>
<body>
<p>
    Hello {{ $user->name }},
</p>

@if($user->is_active == 1)
    <p>
        Your account have been activated to access the mini CRM system <a href="{{ url('admin') }}"> {{ url('admin') }} </a>
    </p>
@else
    <p>
        Your account have been deactivated to access the mini CRM system <a href="{{ url('admin') }}"> {{ url('admin') }} </a>
    </p>
@endif
</body>
</html>
