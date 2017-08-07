@if (Auth::user())
    <a href="{{ route('logout') }}">LOGOUT</a>
    <a href="{{ route('backend::profile') }}">PROFILE</a>
@else
    {!! Form::open(['route' => 'login', 'method' => 'post', 'name' => 'login']) !!}
    {!! Form::text('username', null, ['placeholder' => 'USERNAME']) !!}
    {!! Form::password('password', ['placeholder' => 'PASSWORD']) !!}
    {!! Form::submit('LOGIN', ['class' => 'btn btn-success']) !!}
    {{-- {!! Form::button('REGISTER', ['name' => 'register', 'class' => 'btn btn-cancel', 'route' => 'register']) !!}  --}}
    <a href="{{ route('register') }}" class="btn btn-cancel">REGISTER</a>
    {!! Form::close() !!}
@endif
