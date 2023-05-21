<div>
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">{{ $setting->site_name }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}">{{ $alias }}</a>
        </div>
        <ul class="sidebar-menu">
            @can('Dashboard')
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i>
                        <span>Dashboard</span></a>
                </li>
            @endcan
            @canany(['Post Category View', 'Post Category Create', 'Post Category Edit','Post View', 'Post Create', 'Post Edit','Post Delete','Post Detail'])
            <li class="menu-header">Artikel</li>
            @endcanany
            @can('Post Category View')
                <li>
                    <a class="nav-link" href="{{ route('admin.post-categories.index') }}"><i class="fas fa-list-alt"></i>
                        <span>Kategori</span></a>
                </li>
            @endcan
           @can('Post View')
           <li>
            <a class="nav-link" href="{{ route('admin.posts.index') }}"><i class="fas fa-list-alt"></i>
                <span>Artikel</span></a>
        </li>
           @endcan
            @canany(['Program Category View', 'Program Category Create', 'Program Category Edit','Program Category Delete','Program View', 'Program Create', 'Program Edit','Program Delete','Program Detail'])
            <li class="menu-header">Program</li>
            @endcanany
            @can('Program Category View')
                <li>
                    <a class="nav-link" href="{{ route('admin.programs-categories.index') }}"><i class="fas fa-list-alt"></i>
                        <span>Kategori</span></a>
                </li>
            @endcan
            @can('Program View')
            <li>
                <a class="nav-link" href="{{ route('admin.program.index') }}"><i class="fas fa-list-alt"></i>
                    <span>Program</span></a>
            </li>
            @endcan
            @can('Payment View')
            <li class="menu-header">Transaksi</li>
                <li>
                    <a class="nav-link" href="{{ route('admin.payments.index') }}"><i class="fas fa-list-alt"></i>
                        <span>Metode Pembayaran</span></a>
                </li>
            @endcan
            @can('Transaction View')
                <li>
                    <a class="nav-link" href="{{ route('admin.transactions.index') }}"><i class="fas fa-tags"></i>
                        <span>Transaksi</span></a>
                </li>
            @endcan
            @can('Kerjasama View')
            <li>
                <a class="nav-link" href="{{ route('admin.kerjasama.index') }}"><i class="fas fa-tags"></i>
                    <span>Kerjasama</span></a>
            </li>
        @endcan
        @can('Kerjasama View')
        <li>
            <a class="nav-link" href="{{ route('admin.relawan.index') }}"><i class="fas fa-tags"></i>
                <span>Relawan</span></a>
        </li>
    @endcan
            @canany(['Trash View','User View','Slider View','Social Media View','Filemanager View','Role View','Permission View','Setting View','Sitemap View',])
            <li class="menu-header">Master</li>
            @endcanany
            @can('User View')
                <li>
                    <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-users"></i>
                        <span>User</span></a>
                </li>
            @endcan
            @can('Slider View')
                <li><a class="nav-link" href="{{ route('admin.sliders.index') }}"><i class="fas fa-sitemap"></i>
                        <span>Slider</span></a>
                </li>
            @endcan
            @can('Social Media View')
                <li><a class="nav-link" href="{{ route('admin.socmeds.index') }}"><i class="fas fa-sitemap"></i>
                        <span>Sosial Media</span></a>
                </li>
            @endcan
            @can('Setting View')
                <li>
                    <a class="nav-link" href="{{ route('admin.settings.index') }}"><i class="fas fa-cog"></i>
                        <span>Pengaturan Web</span></a>
                </li>
            @endcan
        </ul>

    </aside>
</div>
