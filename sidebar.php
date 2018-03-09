<div id="menuleiste">
    <div id="menuinnen">
        <?php
            wp_nav_menu( array( 
                'theme_location'    => 'secondary-menu', 
                'container'         => 'ul',
                'container_class'   => 'secondary-menu' ) ); 
        ?>    
      </div>
</div>
<div id="linkespalte">
    <div id="linksinnen">
        <?php
            wp_nav_menu( array( 
                'theme_location'    => 'primary-menu', 
                'container'         => 'ul',
                'container_class'   => 'primary-menu' ) ); 
        ?>
    </div>
</div>