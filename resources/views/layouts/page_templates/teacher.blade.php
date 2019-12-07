<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    @include('layouts.navbars.navs.teacher')
</nav>

<main class="py-4">
    <div class="container">
        <div class="row">
            @include('layouts.navbars.sidebars.teacher')

            @yield('content')

            @include('layouts.footer')
        </div>
    </div>
</main>