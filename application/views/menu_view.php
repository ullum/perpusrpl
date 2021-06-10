<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="nav-link">
          <a href="<?=base_url()?>dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-desktop"></i>
            <span>Setting Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>anggota"><i class="fa fa-user"></i> Anggota</a></li>
            <li><a href="<?=base_url()?>buku"><i class="fa fa-book"></i> Buku</a></li>
            <li><a href="<?=base_url()?>penerbit"><i class="fa fa-building"></i> Penerbit</a></li>
            <li><a href="<?=base_url()?>pengarang"><i class="fa  fa-pencil-square-o"></i> Pengarang</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-area-chart"></i>
            <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>peminjaman"><i class="fa fa-user"></i> Peminjaman</a></li>
            <li><a href="<?=base_url()?>pengembalian"><i class="fa fa-book"></i> Pengembalian</a></li>
          </ul>
        </li>
       <hr>
       <li><a href="<?=base_url()?>login/logout"><i class="fa  fa-sign-out"></i> Logout</a></li>
       </ul>
    </section>
    <!-- /.sidebar -->
  </aside>