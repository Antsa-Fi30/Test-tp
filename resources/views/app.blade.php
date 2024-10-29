<!-- Inclure le header -->
@include('components.header')

<!-- Contenu principal de la page -->
<main>
    <div class="container mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        @yield('content')
    </div>
</main>

<!-- Inclure le footer -->
@include('components.footer')