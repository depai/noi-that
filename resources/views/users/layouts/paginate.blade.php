<nav class="pager">
    <ul class="pager__items js-pager__items">

        @for ($i = 1; $i <= $object->lastPage(); $i++)
        <li class="pager__item {{ $i == $object->currentPage() ? 'is-active' : '' }}">
            <a href="{{ $object->path() . '?page=' . $i }}">{{ $i }}</a>
        </li>
        @endfor

        <li class="pager__item pager__item--next">
            <a href="{{ $object->path() . '?page=' . ($object->currentPage() + 1 > $object->lastPage() ? $object->lastPage() : ($object->currentPage() + 1)) }}" title="Go to next page" rel="next">
                <span class="visually-hidden">Next page</span>
            </a>
        </li>

        <li class="pager__item pager__item--last">
            <a href="{{ $object->path() . '?page=' . $object->lastPage() }}" title="Go to last page">
                <span class="visually-hidden">Last page</span>
            </a>
        </li>
    </ul>
</nav>
