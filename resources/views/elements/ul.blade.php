<ul class="list-root {{ $class ?? '' }}">
    @each('elements/li', $items ?? [], 'item')
</ul>