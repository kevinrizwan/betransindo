    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{route('penonton')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Menu Penonton</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('pesan')}}">
                            <i class="bi bi-circle"></i><span>List Konser</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tiket')}}">
                            <i class="bi bi-circle"></i><span>List Tiket</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->
        </ul>

    </aside>