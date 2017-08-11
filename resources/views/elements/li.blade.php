<li class="list-item {{ $item['class'] ?? null }}">
    {!! $item['content'] ?? null !!}
    @if(isset($item['items']))
        @include('elements/ul', ['items' => $item['items']])
    @endif
</li>