<!DOCTYPE html>
<html lang="en">
    @include('_layouts.partials.head')

    <body class="flex flex-col min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
        <header class="flex container flex-col max-w-6xl px-6 py-8">
            <h1 class="font-bold hover:text-emerald-700 my-0">{{ $page->siteName }}</h1>
            <p class="text-sm text-slate-800">Formerly the Friends of the Taieri Willow</p>
            <p class="text-sm text-slate-800">We have a new domain name! Attempting to redirect you to <code>{{ 'www.coastwillow.org.nz' . $page->getPath() }}</code></p>
        </header>
    </body>
</html>
