<div class="sidebar" data-color="azure" data-background-color="white" data-image="<?php echo base_url()?>resources/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="" class="simple-text logo-normal">
          BRS
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li <?php if($this->router->fetch_class() == 'dashboard') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
        </ul>
      </div>
    </div>