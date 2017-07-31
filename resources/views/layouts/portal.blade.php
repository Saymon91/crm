<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @section('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @show

    <title>{{ $title or 'CRM' }}</title>

    <!-- Fonts -->
    @section('style')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/variables.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/glyphicon.css">
    <link rel="stylesheet" type="text/css" href="/css/main_menu.css">
    <link rel="stylesheet" type="text/css" href="css/part_menu.css">
    <link rel="stylesheet" type="text/css" href="/css/modal.css">
    @show
    <!-- Styles -->

</head>
<body>
{{--<div class="background"></div>--}}
<div class="page flex-center position-ref full-height @if(isset($modal)) blur @endif">
    @include('portal/header')
    <nav class="main-menu">@include('elements/main_menu')</nav>
    <nav class="part-menu">@include('elements/part_menu')</nav>
    <main>
        @section('content')
        @show
    </main>
    <aside></aside>
</div>

@if (isset($modal))
    @include('elements/modal', ['modal'=>$modal])
@endif
</body>
</html>
