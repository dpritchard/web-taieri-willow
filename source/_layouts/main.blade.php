<!DOCTYPE html>
<html lang="en">
    @include('_layouts.partials.head')

    <body class="flex flex-col min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
        <header class="flex container justify-between max-w-4xl mx-auto py-2 px-2">
            <a href="{{ $page->baseUrl }}" title="{{ $page->siteName }} Home" class="inline-flex flex-1 items-center">
                <!-- <img class="h-8 md:h-10 mr-3" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" /> -->
                <h1 class="text-2xl sm:text-4xl font-bold hover:text-emerald-700 my-0">{{ $page->siteName }}</h1>
            </a>
            @include('_layouts.partials.menu-toggle')
        </header>

        <main role="main" class="flex flex-col lg:flex-row container max-w-4xl mx-auto py-2 px-2">
            <nav id="nav-menu" class="hidden pb-4 lg:flex lg:flex-col text-lg lg:border-r-2 lg:border-slate-200 lg:pr-6 lg:pb-0">
                @include('_layouts.partials.menu')
            </nav>
            <div class="lg:pl-6">
                 @yield('body')
            </div>
           
        </main>

        <footer class="text-center text-sm mt-12 py-4 border-t-2 border-slate-200" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-none">
                <li>
                    Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li>
            </ul>
        </footer>

        <script src="{{ $page->fullUrl('/assets/build/js/main.js') }}"></script>

        @stack('scripts')
    </body>
</html>
