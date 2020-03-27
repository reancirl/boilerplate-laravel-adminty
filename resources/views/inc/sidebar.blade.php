<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Menu</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ (request()->is('home')) ? 'active' : '' }}">
                <a href="{{ url('home') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
</nav>