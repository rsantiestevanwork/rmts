<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$username?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>BCN Card</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()?>datacard/index/"><i class="fa fa-circle-o"></i> Admin BCN Card</a></li>
            <li><a href="<?= base_url()?>datacard/edit/"><i class="fa fa-circle-o"></i> New</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>User</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()?>user/index/"><i class="fa fa-circle-o"></i> List</a></li>
            <li><a href="<?= base_url()?>user/login/"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="<?= base_url()?>user/logout/"><i class="fa fa-circle-o"></i> Logout</a></li>
            <li><a href="<?= base_url()?>user/register/"><i class="fa fa-circle-o"></i> Register</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Church</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()?>church/"><i class="fa fa-circle-o"></i> List</a></li>
            <li><a href="<?= base_url()?>church/newchurch/"><i class="fa fa-circle-o"></i> New</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Program</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()?>program/index/"><i class="fa fa-circle-o"></i> List</a></li>
            <li><a href="<?= base_url()?>program/newprogram/"><i class="fa fa-circle-o"></i> New</a></li>
            <li><a href="<?= base_url()?>program/report_by_date/"><i class="fa fa-circle-o"></i> Report by Date</a></li>
          </ul>
        </li>
        <li class="header"> Information </li>
        <!--
        <li><a href="#"><i class="fa fa-circle-o text-green"></i> <span>Applied</span></a></li>

        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Pending</span></a></li>

        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Reject</span></a></li>

        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Approval</span></a></li>
        -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>