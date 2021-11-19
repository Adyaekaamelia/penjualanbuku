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
                <a href="{{ route('home') }}">Beranda</a>
            </li>
            <li>
                <a href="{{ route('supplier.index') }}"></i>Supplier</a>

            <li>
                <a href="{{ route('buku.index') }}">Data Buku</a>
            </li>
            <li>
                <a href="{{ route('transaksi.index') }}">Transaksi </a>

            </li>

            </li>
        </ul>

    </div>
</div>
