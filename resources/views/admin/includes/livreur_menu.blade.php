<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
    <li class="nav-item @if(Request::is('missions*')) active @endif">
        <a href="{{ url('missions') }}" class="nav-link ">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
            Missions
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
   
</ul>