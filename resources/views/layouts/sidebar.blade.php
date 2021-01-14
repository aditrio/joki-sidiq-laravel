<div class="nav-left-sidebar bg-dark sidebar-light">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light text-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/dash"><i class="fa fa-fw fa-user-circle mb-1"></i>Dashboard </a>
                        
                    </li>
                  @if (Auth::user()->role == "guru")
                    <li class="nav-divider">
                        Data
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/dash/modul" ><i class="fas fa-fw fa-book mb-1"></i>Modul</a>
                        
                    </li>
                  @endif
                   
                  
                    
                </ul>
            </div>
        </nav>
    </div>
</div>