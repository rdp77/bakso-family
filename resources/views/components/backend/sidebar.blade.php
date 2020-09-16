<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">Bakso Family</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">BaF</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu Utama</li>
            <li class="nav-item dropdown active">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('user') }}" class="nav-link"><i class="far fa-user"></i> <span>Manajemen
                        Pengguna</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('product') }}" class="nav-link"><i class="fas fa-th"></i>
                    <span>Produk</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('product') }}" class="nav-link"><i class="fas fa-pencil-ruler"></i>
                    <span>Kustomisasi</span></a>
            </li>
        </ul>
    </aside>
</div>