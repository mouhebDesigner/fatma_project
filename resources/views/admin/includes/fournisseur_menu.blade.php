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
  
    <li class="nav-item @if(Request::is('fournisseur/produits*')) active @endif">
        <a href="{{ url('fournisseur/produits') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Porduits
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('fournisseur/commandes*')) active @endif">
        <a href="{{ url('fournisseur/commandes') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Commandes
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