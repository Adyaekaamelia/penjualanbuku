<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
            <li>
                <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ route('supplier.index') }}"><i class="fa fa-sitemap fa-fw"></i>Supplier</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('buku.index') }}">Data Buku</a>
                    </li>
                    <li>
                        <a href="{{ route('transaksi.index') }}">Transaksi </a>

                    </li>
                </ul>
            </li>
        </ul>

    </div>
</div>
