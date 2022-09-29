<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">DAFTAR MENU</li>
        <!-- MENU DASHBOARD -->
        <li>
          <a href="<?=url('dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <!-- MENU DATA -->
        <li>
          <a href="<?=url('datastasiun')?>">
            <i class="fa fa-files-o"></i>
            <span>Data Stasiun</span>
          </a>
        </li>
        <!-- SUKU CADANG... FORM DAN DATANYA -->
        <li>
          <a href="<?=url('sukucadang')?>">
            <i class="fa fa-th"></i> <span>Suku Cadang</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">ASRS</small><small class="label pull-right bg-red">IKRO</small>
            </span>
          </a>
        </li>

        <li>
          <!-- PEMELIHARAAN... FORM DAN DATANYA -->
          <a href="<?=url('pemeliharaan')?>">
            <i class="fa fa-th"></i> <span>Pemeliharaan</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">ASRS</small><small class="label pull-right bg-red">IKRO</small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Suku Cadang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Pemeliharaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=templates()?>/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Metadata</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>