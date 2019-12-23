<ul class="navbar-nav bg-gradient-dark sidebar sidenav sidebar-dark accordion toggled" id="accordionSidebar">
    @include('layouts.navbars.sidebars.teacher')
</ul>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            @include('layouts.navbars.navs.teacher')
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </div>
    @include('layouts.footer')
</div>
