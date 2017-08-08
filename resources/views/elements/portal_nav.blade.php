@push('styles')
    <link rel="stylesheet" type="text/css" href="/css/main_menu.css">
@endpush

@php
    $parts = [
        ['name' => 'HOME', 'route' => 'portal::index', 'options' => []],
        ['name' => 'about', 'route' => 'portal::about', 'options' => []]
    ];
@endphp

<nav class=""></nav>