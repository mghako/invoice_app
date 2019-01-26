    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt text-primary"></i>
            <p>
            Dashboard
            </p>
        </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs text-warning"></i>
                <p>
                Terminal Invoice Setting
                <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ml-3">
                <li class="nav-item">
                <a href="{{ route('terminal_invoice.index') }}" class="nav-link">
                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                    <p>Yangon - Mingalardon</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{ route('terminal_invoice_npt.index') }}" class="nav-link">
                <i class="nav-icon fas fa-receipt"></i>
                    <p>Naypyitaw</p>
                </a>
                </li>
                <!-- <li class="nav-item">
                <a href="" class="nav-link">
                <i class="nav-icon fas fa-file-invoice"></i>
                    <p>Shwe Taung Energy</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="" class="nav-link">
                <i class="nav-icon fas fa-file-invoice"></i>
                    <p>Terminal Invoice</p>
                </a>
                </li> -->
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs text-warning"></i>
                <p>
                TopStar Invoice Setting
                <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ml-3">
                <li class="nav-item">
                <a href="{{ route('topstar_invoice_npt.index') }}" class="nav-link">
                <i class="nav-icon fas fa-receipt"></i>
                    <p>Naypyitaw</p>
                </a>
                </li>
                <!-- <li class="nav-item">
                <a href="" class="nav-link">
                <i class="nav-icon fas fa-file-invoice"></i>
                    <p>Shwe Taung Energy</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="" class="nav-link">
                <i class="nav-icon fas fa-file-invoice"></i>
                    <p>Terminal Invoice</p>
                </a>
                </li> -->
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs text-warning"></i>
                <p>
                Shwe Taung Invoice
                <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview ml-3">
                <li class="nav-item">
                <a href="{{ route('shwetaungenergy_invoice_npt.index') }}" class="nav-link">
                <i class="nav-icon fas fa-receipt"></i>
                    <p>Naypyitaw</p>
                </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fa fa-th"></i>
            <p>
            Reports
            <span class="right badge badge-danger">New</span>
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <i class="nav-icon fas fa-power-off"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
        </li>
    </ul>