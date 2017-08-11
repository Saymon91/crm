@php
    $options = $options ?? [];
    $items = $items ?? [];
    $header = $header ?? null;
    $footer = $footer ?? null;
    $class = 'list';
    if ($header) $class = "$class-header";
    if ($footer) $class = "$class-footer";
    if (isset($options['class'])) $class = "$class {$options['class']}";
@endphp

<div class="{{ $class }} {{ $options['class'] ?? '' }}">
    @if ($header)
        @include('elements/header', ['content' => $header])
    @endif
    @include('elements/ul', ['items' => $items])
    @if ($footer)
        @include('elements/header', ['content' => $footer])
    @endif
</div>