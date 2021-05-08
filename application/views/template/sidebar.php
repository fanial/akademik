<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>AK</b>21</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>SIMAK</b>2021</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>(username)</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- search form (Optional) -->
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

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">SIMAK 2021</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li class=""><a href="<?php echo base_url() ?>index.php/welcome/index"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

                    <li class=""><a href="<?php echo base_url() ?>index.php/mahasiswa/index"><i class="fa fa-graduation-cap"></i> <span>Mahasiswa</span></a></li>

                    <li class=""><a href="<?php echo base_url() ?>index.php/jurusan/index"><i class="fa fa-university"></i> <span>Jurusan</span></a></li>

                    <li class=""><a href="<?php echo base_url() ?>dosen.php"><i class="fa fa-users"></i> <span>Dosen</span></a></li>


                    <li class=""><a href="<?php echo base_url() ?>matkul.php"><i class="fa fa-book"></i> <span>Jadwal Kuliah</span></a></li>

                    <li class=""><a href="<?php echo base_url() ?>gantipw.php"><i class="fa fa-lock"></i> <span>Ganti Password</span></a></li>

                    <li class=""><a href="<?php echo base_url() ?>logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>