<?php
$parts = [
    ['title' => 'home', 'route' => 'home', 'label' => 'home'],
    ['title' => 'about', 'route' => 'about', 'label' => 'about'],
];
?>

<nav>
    <ul class="menu-root">
        <li class="menu-item"><a class="menu-link" title="home" href="{{ route('portal::home') }}">home</a></li>
        <li class="menu-item"><a class="menu-link" title="about">about</a></li>
    </ul>
</nav>
