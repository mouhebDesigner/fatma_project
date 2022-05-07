<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
    <li class="nav-item @if(Request::is('home')) active @endif">
        <a href="{{ url('home') }}" class="nav-link ">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Acceuil
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
  
    <li class="nav-item @if(Request::is('admin/users*')) active @endif">
        <a href="{{ url('admin/users') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Liste d'inscription
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    
    <li class="nav-item @if(Request::is('admin/livreurs*')) active @endif">
        <a href="{{ url('admin/livreurs') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Les Livreurs
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/vehicules*')) active @endif">
        <a href="{{ url('admin/vehicules') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Les Véhicule
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/categories*')) active @endif">
        <a href="{{ url('admin/categories') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Gérer les catégories
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/missions*')) active @endif">
        <a href="{{ url('admin/livraisons') }}" class="nav-link ">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
            Demande de livraison
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/missions*')) active @endif">
        <a href="{{ url('admin/missions') }}" class="nav-link ">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
            Gérer les missions
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
   
</ul>