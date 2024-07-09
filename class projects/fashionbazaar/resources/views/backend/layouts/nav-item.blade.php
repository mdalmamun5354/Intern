<!-- resources/views/components/nav-item.blade.php -->
<li class="nav-item">
    <a class="nav-link {{ $active ? 'active' : '' }}" href="{{ $link }}">
        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            {!! $icon !!}
        </div>
        <span class="nav-link-text ms-1">{{ $name }}</span>
    </a>
</li>
