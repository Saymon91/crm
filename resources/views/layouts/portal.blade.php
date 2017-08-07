<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @stack('meta')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title or 'CRM' }}</title>

    <!-- Fonts -->
    @stack('style')
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/variables.css">
        <link rel="stylesheet" type="text/css" href="/css/portal.css">

    @stack('scripts')
<!-- Styles -->

</head>
<body>
@section('body')
    @show
    <div class="nav"><nav class="main-menu @if(isset($modal)) blur @endif">@include('elements/portal_nav')</nav></div>
    <main class="@if(isset($modal)) blur @endif">
        @yield('content')
    </main>

    @if (isset($modal))
        @include('elements/modal', ['modal'=>$modal])
    @endif
</body>
</html>
