<div class="sidebar" style="background-color: #1C1427">
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
            <a class="nav-link" href="<?php echo base_url()?>dashboard">
              <!-- <i class="material-icons">dashboard</i> -->
              <p>Dashboard</p>
            </a>
          </li>

          

          <div class="mx-auto" style="height: 20px;"></div>
          <p class="nav-link" style="line-height: 0px"><strong>Bus Management</strong></p>
          <div class="mx-auto" style="height: 20px;"></div>

          <li <?php if($this->router->fetch_class() == 'bus_type') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>bus_type">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Bus Type</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'bus_template') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>bus_template">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Bus Template</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'businformation') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>businformation">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Bus Information</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'bus_registration') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>bus_registration">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Bus Registration</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'bus_driver') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>bus_driver">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Bus Driver</p>
            </a>
          </li>



          

          <div class="mx-auto" style="height: 20px;"></div>
          <p class="nav-link" style="line-height: 0px"><strong>Fare Management</strong></p>
          <div class="mx-auto" style="height: 20px;"></div>

  
          <li <?php if($this->router->fetch_class() == 'fare') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>fare">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Fare</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'promo') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>promo">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Promos and Discount</p>
            </a>
          </li>
          
          <li <?php if($this->router->fetch_class() == 'insurance') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>insurance">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>insurance</p>
            </a>
          </li>


          <div class="mx-auto" style="height: 20px;"></div>
          <p class="nav-link" style="line-height: 0px"><strong>Route Management</strong></p>
          <div class="mx-auto" style="height: 20px;"></div>

          <li <?php if($this->router->fetch_class() == 'terminal') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>terminal">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Terminal</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'route') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>route">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Route</p>
            </a>
          </li>

          <div class="mx-auto" style="height: 20px;"></div>
          <p class="nav-link" style="line-height: 0px"><strong>Schedule Management</strong></p>
          <div class="mx-auto" style="height: 20px;"></div>

          <li <?php if($this->router->fetch_class() == 'schedule') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>schedule">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Schedule Setup</p>
            </a>
          </li>
          
          <li <?php if($this->router->fetch_class() == 'busschedule') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>busschedule">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Bus Schedule</p>
            </a>
          </li>

          <div class="mx-auto" style="height: 20px;"></div>
          <p class="nav-link" style="line-height: 0px"><strong>Reservation Management</strong></p>
          <div class="mx-auto" style="height: 20px;"></div>

          <li <?php if($this->router->fetch_class() == 'reservation') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>reservation">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Reservation</p>
            </a>
          </li>

          <div class="mx-auto" style="height: 20px;"></div>
          <p class="nav-link" style="line-height: 0px"><strong>Cashier</strong></p>
          <div class="mx-auto" style="height: 20px;"></div>

          <li <?php if($this->router->fetch_class() == 'counter') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>counter">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Counter</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'chartofaccount') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>chartofaccount">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Chart of Account</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'payment') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>payment">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Payment</p>
            </a>
          </li>

          <div class="mx-auto" style="height: 20px;"></div>
          <p class="nav-link" style="line-height: 0px"><strong>User Management</strong></p>
          <div class="mx-auto" style="height: 20px;"></div>

          <li <?php if($this->router->fetch_class() == 'user') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>user">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>User</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'logout') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>logout">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Logout</p>
            </a>
          </li>

          


        </ul>
      </div>
    </div>