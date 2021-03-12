<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('assets/dist/img/paint.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info" style="vertical-align: center">
              <p>{{Auth::user()->name}}</p>
              {{Auth::user()->jabatan}}
            </div>
          </div>
          <!-- search form -->
         
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview menu-close">
              <a href="#">
                <i class="fa fa-user"></i> <span>Pengguna</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/tambah-admin"><i class="fa fa-circle-o"></i> Tambah Admin</a></li>
                <li><a href="/kelola-admin"><i class="fa fa-circle-o"></i> Kelola Admin</a></li>
                <li><a href="/kelola-pelanggan"><i class="fa fa-circle-o"></i> Kelola Pelanggan</a></li>
              </ul>
            </li>
            <li class="treeview menu-close">
              <a href="#">
                <i class="fa fa-flask"></i> <span>Katalog</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/tambah-katalog"><i class="fa fa-circle-o"></i> Tambah Katalog</a></li>
                <li><a href="/kelola-katalog"><i class="fa fa-circle-o"></i> Kelola Katalog</a></li>
                <li><a href="/tambah-kategori"><i class="fa fa-circle-o"></i> Tambah Kategori</a></li>
                <li><a href="/kelola-kategori"><i class="fa fa-circle-o"></i> Kelola Kategori</a></li>
              </ul>
            </li>
            <li class="treeview menu-close">
              <a href="#">
                <i class="fa fa-shopping-cart"></i> <span>Pesanan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/incoming-order"><i class="fa fa-circle-o"></i> Pesanan Masuk</a></li>
                <li><a href="/ongoing-order"><i class="fa fa-circle-o"></i> Pesanan dalam Proses</a></li>
                <li><a href="/order-complete"><i class="fa fa-circle-o"></i> Pesanan Selesai</a></li>
                <li><a href="/canceled-order"><i class="fa fa-circle-o"></i> Pesanan Dibatalkan</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>