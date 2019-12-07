<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    @include('layouts.navbars.navs.student')
</nav>

<main class="py-4">
    <div class="container">
        <div class="row">
            @include('layouts.navbars.sidebars.student')

            @yield('content')

            @include('layouts.footer')
        </div>
    </div>
</main>