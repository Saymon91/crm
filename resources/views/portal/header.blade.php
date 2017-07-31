<header>
    <div class="title">
        <a href="{{ route('portal::home') }}">{{ $title or 'PORTAL' }}</a>
    </div>
    <div class="user-panel">
        @include('auth.login')
    </div>
</header>