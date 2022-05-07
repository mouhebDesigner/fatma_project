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
  
    <li class="nav-item @if(Request::is('fournisseur/demandes*')) active @endif">
        <a href="{{ url('fournisseur/demandes') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Demande de livraison
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('fournisseur/livreurs*')) active @endif">
        <a href="{{ url('fournisseur/livreurs') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Livreurs
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('fournisseur/missions*')) active @endif">
        <a href="{{ url('fournisseur/missions') }}" class="nav-link ">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
            Gérer les missions
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
   
</ul>