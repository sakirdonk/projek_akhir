  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
      <a href="index.html" class="logo d-flex justify-content-center mt-3"><img src="<?=base_url('assets/img/logo.png')?>" style="width:90%;" alt=""></a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="<?=base_url('assets/img/testimonials/person.png') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php
            if ($this->session->has_userdata('USERNAME')) {
              echo $this->session->userdata('USERNAME');
              echo ' - ' . $this->session->userdata('ROLE');
            }

            ?>
          </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php //if ($this->session->userdata('ROLE') == 'ADMIN') { ?>
            <li class="nav-item">
              <a href="<?= base_url('index.php/admin/faskes') ?>" class="nav-link">
                <i class="nav-icon fas fa-building"></i>
                <p>
                  Data Faskes
                  <i class="right fas fa-angle-right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('index.php/admin/komentar') ?>" class="nav-link">
                <i class="nav-icon fas fa-comment-dots"></i>
                <p>
                  Data Komentar
                  <i class="right fas fa-angle-right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('index.php/admin/user') ?>" class="nav-link">
                <i class="nav-icon fas fa-user-alt"></i>
                <p>
                  Data User
                  <i class="right fas fa-angle-right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('index.php/admin/kecamatan') ?>" class="nav-link">
                <i class="nav-icon fas fa-map-marker"></i>
                <p>
                  Data Kecamatan
                  <i class="right fas fa-angle-right"></i>
                </p>
              </a>
            </li>
          <?php //} ?>
          <li class="nav-item">
            <a href="<?= base_url('index.php/login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar fa fa-user -->
  </aside>