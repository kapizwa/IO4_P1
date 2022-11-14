<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    
                Menu
                </a>
            </li>
            
                
            
                @can('isAdmin')
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-fw fas fa-gear nav-icon">

                        </i>
                        Zarządzanie kontami
                    </a>
                </li>
                @endcan
            
                <li class="nav-item">
                    <a href="/order_list" class="nav-link">
                        <i class="fa-fw fas fa-check nav-icon">

                        </i>
                        Złożone zamówienia
                    </a>
                </li>
            
        
                <li class="nav-item">
                    <a href="/order_edit" class="nav-link">
                        <i class="fa-fw fas fa-edit nav-icon">

                        </i>
                        Edycja zamówień
                    </a>
                </li>
            @can('isAdmin')
            <li class="nav-item">
                <a href="/users_list" class="nav-link">
                    <i class="fa-fw fas fa-user nav-icon">

                    </i>
                    Użytkownicy
                </a>
            </li>
            @endcan
            <li class="nav-item">
                <a href="/book_list" class="nav-link">
                    <i class="fa-fw fas fa-search nav-icon">

                    </i>
                    Lista książek
                </a>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    Wyloguj
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>