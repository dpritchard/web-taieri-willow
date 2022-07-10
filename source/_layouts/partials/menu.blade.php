<a title="About" href="{{ $page->fullUrl('/about') }}"
    class="mr-6 lg:mr-0 text-gray-700 hover:text-amber-700 {{ $page->isActive('/about') ? 'active text-amber-700' : '' }}">
    About
</a>
<a title="Contact" href="{{ $page->fullUrl('/contact') }}"
    class="mr-6 lg:mr-0 text-gray-700 hover:text-amber-700 {{ $page->isActive('/contact') ? 'active text-amber-700' : '' }}">
    Contact
</a>
<a title="News" href="{{ $page->fullUrl('/news') }}"
    class="mr-6 lg:mr-0 text-gray-700 hover:text-amber-700 {{ $page->isActive('/news') ? 'active text-amber-700' : '' }}">
    News
</a>
