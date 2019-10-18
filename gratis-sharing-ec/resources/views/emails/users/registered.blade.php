Hello {{ $user->name }}, <br>

Click the button below to complete your registration: <br>

<a href="{{ url('/user/activate/' . $user->activate_token) }}">
    <button>Click me!</button>
</a>