<nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a href="<?php echo base_url()?>user/home" 
                    <?php if($this->router->fetch_class() == 'home') {?> class="active-menu waves-effect waves-dark" <?php } ?>>
                    <i class="fa fa-dashboard"></i> Home</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>user/task"
                    <?php if($this->router->fetch_class() == 'task') {?> class="active-menu waves-effect waves-dark" <?php } ?>>
                        <i class="fa fa-sitemap"></i> Task</span>
                    </a>
                </li>
            </ul>

        </div>
</nav>