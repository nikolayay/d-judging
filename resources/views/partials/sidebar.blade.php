<aside class="sidebar">
    <div class="scrollbar-inner">

        @include('partials.auth-user')

        <ul class="navigation">

            <li><a href=#"><i class="zmdi zmdi-home"></i>Dashboard</a></li>

            
            <li><a href="#"><i class="zmdi zmdi-assignment"></i>Entries</a></li>
        
        
            <li><a href="#"><i class="zmdi zmdi-apps"></i>Categories</a></li>
        

            <li><a href="#"><i class="zmdi zmdi-paypal-alt"></i>Payments</a></li>
        

            <li><a href="#"><i class="zmdi zmdi-star-circle"></i>Competitions</a></li>
        

            <li><a href="#"><i class="zmdi zmdi-accounts-alt"></i>Users</a></li>
        

            <li><a href="#"><i class="zmdi zmdi-account-circle"></i>Roles</a></li>
            

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