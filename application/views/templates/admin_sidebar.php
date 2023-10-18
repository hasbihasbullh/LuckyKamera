        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(''); ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-camera-retro"></i>
                </div>
                <div class="sidebar-brand-text mx-1">ADMINISTRATOR</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Navigation
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Sewa Menu -->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sewa" aria-expanded="true" aria-controls="sewa">
                <i class="fas fa-fw fa-exchange-alt"></i>
                <span>Sewa</span>
              </a>
              <div id="sewa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="<?= base_url('admin/sewa_bayar')  ?>">Menunggu Pembayaran</a>
                  <a class="collapse-item" href="<?= base_url('admin/sewa_bayar')  ?>">Menunggu Konformasi</a>
                  <a class="collapse-item" href="<?= base_url('admin/sewa')  ?>">Data Sewa</a>
                </div>
              </div>
            </li>

            <!-- Nav Item - Barang Menu -->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#barang" aria-expanded="true" aria-controls="barang">
                <i class="fas fa-fw fa-boxes"></i>
                <span>Barang</span>
              </a>
              <div id="barang" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="<?= base_url('admin/kategori') ?>">Kategori Barang</a>
                  <a class="collapse-item" href="<?= base_url('admin/barang') ?>">Data Barang</a>
                </div>
              </div>
            </li>

            <!-- Nav Item - Customers -->
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/customers') ?>">
                <i class="fas fa-users"></i>
                <span>Customers</span></a>
            </li>

            <!-- Nav Item - Barang Menu -->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kontak" aria-expanded="true" aria-controls="kontak">
                <i class="fas fa-fw fa-phone"></i>
                <span>Kontak</span>
              </a>
              <div id="kontak" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="<?= base_url('admin/contactus') ?>">Hubungi Kami</a>
                  <a class="collapse-item" href="<?= base_url('admin/info_contact') ?>">Info Kontak</a>
                </div>
              </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End  of Sidebar --> 