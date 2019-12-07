<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    @include('layouts.navbars.navs.guess')
</nav>

<main class="py-4">
    <div class="container">
        <div class="row">

            @yield('content')
        </div>
    </div>
</main>