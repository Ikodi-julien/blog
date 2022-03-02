<li class="nav-item">
    <a
        class="nav-link {{ $disabled ? 'disabled' : '' }}"
        aria-current="page"
        href="{{url($link)}}"
        >
        <span class="link {{request()->is($link) ? 'is-active' : ''}}">{{$text}}</span>
    </a>
</li>
