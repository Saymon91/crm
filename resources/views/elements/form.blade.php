@php
    $options = $options ?? [];
    $fields = $fields ?? [];
    $header = $header ?? null;
    $footer = $footer ?? null;
    $buttons = $buttons ?? [];
    $class = 'form';
    if (isset($options['class'])) $class = "$class {$options['class']}";
    $grid_template_rows = ($header ? '10fr ' : '') . 'repeat(' . count($fields) . ', 9fr) 9fr' . ($footer ? ' 7fr' : '');
@endphp

<form
        class="{{ $class }} {{ $options['class'] ?? '' }}"
        style="grid-template-rows: {{ $grid_template_rows }}"
        method="{{ $method ?? 'post' }}"
        action="{{ isset($action) ? $action : isset($route) ? route($route) : '' }}"
        name="{{ $name ?? '' }}"
>
    @if ($header)
        @include('elements/header', $header)
    @endif

    @each('elements/form_field', $fields, 'field')

    @if ($footer)
        @include('elements/header', ['content' => $footer])
    @endif
</form>