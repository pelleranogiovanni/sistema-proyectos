<nav class="sidebar-nav">
    <ul id="sidebarnav">
    <li class="{{ setActive('home')}}"> <a class="waves-effect waves-dark" href="{{route('home')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
        </li>
    <li class="{{ setActive('proyectos')}}"> <a class="waves-effect waves-dark" href="{{ route('proyectos.index')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Proyectos</span></a>
        </li>
        {{-- <li class="{{ request()->routeIs('perfil') ? 'active' : ''}}"> <a class="waves-effect waves-dark" href="pages-profile.html" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a>
        </li> --}}
    </ul>
</nav>
