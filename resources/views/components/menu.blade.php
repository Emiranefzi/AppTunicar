<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>




@can("admin")
<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>Vue globale</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-swatchbook"></i>
                  <p>Locations</p>
                </a>
              </li>
            </ul>
        </li>
@endcan


@can("admin")
<li class="nav-item }">
        <li class="nav-item {{ setMenuClass('admin.acces.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.acces.', 'active') }}">
              <i class=" nav-icon fas fa-user-shield"></i>
              <p>
                Les accès
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item  ">
                <a
                href="{{ route('admin.acces.users.index') }}"
                class="nav-link {{ setMenuClass('admin.acces.users.index', 'active') }}"
                >
                  <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Utilisateurs</p>
                </a>
              </li>
              
            </ul>
        </li>
@endcan
@can("manager")
        <li class="nav-item {{ setMenuClass('manager.gestVoiture', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('manager.gestVoiture', 'active') }}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Gestion des voitures
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                
                <li class="nav-item">
                <a 
                href="{{ route('manager.gestVoiture.voiture.index') }}"
                class="nav-link {{ setMenuClass('manager.gestVoiture.voiture.index', 'active') }}">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p>Voitures</p>
                    </a>
                </li>
                
            </ul>
        </li>




        <li class="nav-header">Clients et Locations</li>
        <li class="nav-item">
            <a href="{{ route('manager.client.index') }}"  class="nav-link ">
                <i class="nav-icon fas fa-users"></i>
                <p>
                Gestion des clients
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('manager.location.index') }}" class="nav-link">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                Gestion des locations
                </p>
            </a>


      
        </li>
          @endcan

        </ul>

       </nav>