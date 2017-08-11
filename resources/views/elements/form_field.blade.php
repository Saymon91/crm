@php
    $attributes = $field['attributes'] ?? [];
    $title = $attributes['title'] ?? null;
    if ($title) unset($attributes['title']);
@endphp

<div class="form-field" @if($title) title="{{ $title }}" @endif>
    <input
    @foreach($attributes as $key => $value)
        {{ $key }}="{{ $value }}"
    @endforeach
    id="{{ $field['id'] ?? "form-field-{$field['name']}" }}"
    class="input {{ $field['class'] ?? '' }}"
    placeholder="{{ $attributes['placeholder'] ?? ' ' }}"
    >
    <label
            class="label"
            for="{{ $field['id'] ?? "form-field-{$field['name']}" }}"

    >{!! $field['label'] !!}</label>
</div>