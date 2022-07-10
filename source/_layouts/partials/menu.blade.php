<a title="About" href="{{ $page->fullUrl('/about') }}"
    class="mr-6 lg:mr-0 text-gray-700 hover:text-amber-700 {{ $page->isActive('/about') ? 'active text-amber-700' : '' }}">
    About
</a>
<a title="Contact" href="{{ $page->fullUrl('/contact') }}"
    class="mr-6 lg:mr-0 text-gray-700 hover:text-amber-700 {{ $page->isActive('/contact') ? 'active text-amber-700' : '' }}">
    Contact
</a>
<a title="Blog" href="{{ $page->fullUrl('/blog') }}"
    class="mr-6 lg:mr-0 text-gray-700 hover:text-amber-700 {{ $page->isActive('/blog') ? 'active text-amber-700' : '' }}">
    Blog
</a>
