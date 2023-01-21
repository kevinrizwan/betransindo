    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{route('staff')}}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Menu Staff</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('konser')}}">
                            <i class="bi bi-circle"></i><span>Konser</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('staff.tiket')}}">
                            <i class="bi bi-circle"></i><span>List Tiket</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('cekin')}}">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Checkin Pentonton</span>
                </a>
            </li><!-- End Login Page Nav -->
        </ul>

    </aside>