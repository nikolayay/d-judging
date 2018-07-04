<aside class="sidebar">
    <div class="scrollbar-inner">

        @include('partials.auth-user')

        <ul class="navigation">

            <li><a href='/'><i class="zmdi zmdi-assignment"></i>Dashboard</a></li>
        

            <li>
                <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="zmdi zmdi-power"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

        </ul>
    </div>
</aside>