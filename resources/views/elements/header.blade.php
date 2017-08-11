@php
    $options = $options ?? [];
    $content = $content ?? null;
@endphp
<div class="header {{ $options['class'] ?? '' }}">
    @if($content)
        {!! $content !!}
    @else
        <div class="left {{ $leftClass ??  '' }}">{!! $leftContent ??  '' !!}</div>
        <div class="center {{ $centerClass ??  '' }}">{!! $centerContent ??  '' !!}</div>
        <div class="left {{ $rightClass ??  '' }}">{!! $rightContent ??  '' !!}</div>
    @endif
</div>