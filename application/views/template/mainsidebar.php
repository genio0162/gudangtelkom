<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('user'); ?>" class="brand-link">
        <img src="<?= base_url(); ?>asset/dist/img/talogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIG Witel Jember</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('asset/dist/img/profile/') . $info_user['foto']; ?>" class="img-circle elevation-2 rounded-circle" alt="User Image">
            </div>
            <div class="info">
                <a href="<?= base_url('user/profile'); ?>" class="d-block"><?= $info_user['nama']; ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('user'); ?>" class="nav-link">
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `user_menu`.`id`, `menu`
                          FROM `user_menu` JOIN `user_access_menu` 
                          ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                          WHERE `user_access_menu`.`role_id` = $role_id
                          ORDER BY `user_access_menu`.`menu_id` ASC
                         ";
                $menu = $this->db->query($queryMenu)->result_array();
                ?>
                <?php foreach ($menu as $m) : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <p>
                                <?= $m['menu']; ?>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <!-- Sub Menu sesuai Menu -->
                        <?php
                        $menuId = $m['id'];
                        $querySubMenu = "SELECT *
                                 FROM `user_sub_menu` JOIN `user_menu`
                                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                 WHERE `user_sub_menu`.`menu_id` = $menuId
                                 AND `user_sub_menu`.`is_active` = 1
                        ";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>

                        <?php foreach ($subMenu as $sm) : ?>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url($sm['url']); ?>" class="nav-link">
                                        <i class="<?= $sm['icon']; ?>"></i>
                                        <p><?= $sm['title']; ?></p>
                                    </a>
                                </li>
                            </ul>
                        <?php endforeach; ?>
                    </li>
                <?php endforeach; ?>

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                </div>

                <li class="nav-item">
                    <a href="<?= base_url('login/logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>