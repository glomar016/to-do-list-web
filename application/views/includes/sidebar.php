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
              <!-- <i class="material-icons">dashboard</i> -->
              <p>Dashboard</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'user') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>user">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>User</p>
            </a>
          </li>

          <div class="mx-auto" style="height: 20px;"></div>
          <p class="nav-link" style="line-height: 0px"><strong>Bus Information</strong></p>
          <div class="mx-auto" style="height: 20px;"></div>

          <li <?php if($this->router->fetch_class() == 'businformation') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>businformation">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Bus Information</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'bus_type') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>bus_type">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Bus Type</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'fare') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>fare">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Fare</p>
            </a>
          </li>
          
          <div class="mx-auto" style="height: 20px;"></div>
          <p class="nav-link" style="line-height: 0px"><strong>Routes</strong></p>
          <div class="mx-auto" style="height: 20px;"></div>

          <li <?php if($this->router->fetch_class() == 'terminal') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>terminal">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Terminal</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'landmark') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>landmark">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Landmark</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'route') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>route">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Route</p>
            </a>
          </li>

        </ul>
      </div>
    </div>