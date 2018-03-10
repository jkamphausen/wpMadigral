<div id="toggleMobile">
    <div id="menubar">
        <div id="innerMenubar">
            <?php
                wp_nav_menu( array( 
                    'theme_location'    => 'secondary-menu', 
                    'container'         => 'ul',
                    'container_class'   => 'secondary-menu' ) ); 
            ?>    
          </div>
    </div>
    <input class="faChkSqr" id="menucbx" type="checkbox" checked="checked">
    <label id="menucbx-label" for="menucbx"></label>
    <!-- <i class="fa fa-fw fa-navicon unchecked"></i>
    <i class="fa fa-fw fa-times checked"></i> -->
    <div id="menu-container">
        <div id="sidebar">
            <div id="innerSidebar">
                <?php
                    wp_nav_menu( array( 
                        'theme_location'    => 'primary-menu', 
                        'container'         => 'ul',
                        'container_class'   => 'primary-menu' ) ); 
                ?>
            </div>
        </div>
    </div>
</div>