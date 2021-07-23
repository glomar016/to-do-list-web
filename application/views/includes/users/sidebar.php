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

          <li <?php if($this->router->fetch_class() == 'my_reservation') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" href="<?php echo base_url()?>users/my_reservation">
              <!-- <i class="material-icons">dashboard</i> -->
              <p>My Reservation</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'view_schedule') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>users/view_schedule">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>View Schedule</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'reservation') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>users/reservation">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Book / Reserve Ticket</p>
            </a>
          </li>

          <li <?php if($this->router->fetch_class() == 'online_payment') {?> class="active has-sub" <?php } ?>>
            <a class="nav-link" style="margin: 0px 15px 0" href="<?php echo base_url()?>users/online_payment">
              <!-- <i class="material-icons">account_circle</i> -->
              <p>Online Payment</p>
            </a>
          </li>

        </ul>
      </div>
    </div>