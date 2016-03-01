<?php

/**
 * Default Sidebar
 * by www.unitedthemes.com
 */

// count the active sidebars to determine column sizes
$sidebars = is_active_sidebar( 'first-footer-widget-area' ) + is_active_sidebar( 'second-footer-widget-area' ) + is_active_sidebar( 'third-footer-widget-area' ) + is_active_sidebar( 'fourth-footer-widget-area' );

<?php if ($sidebars) : ?>
    
    <div class="ut-footer-area">
     
        <div class="grid-container">
            
        <?php if (is_active_sidebar( 'first-footer-widget-area' )) : ?>
        
        <div class="first-footer-widget-area">
            <ul class="sidebar">
                <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
            </ul>
        </div>
        
        <?php endif;?>

        <?php if (is_active_sidebar( 'second-footer-widget-area' )) :?>
        
        <div class="second-footer-widget-area">
            <ul class="sidebar">
                <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
            </ul>
        </div>
        
        <?php endif;?>
        
        <?php if( $sidebars == "4" ) { echo '<div class="clear hide-on-desktop hide-on-mobile"></div>'; } ?>
        
        <?php if (is_active_sidebar( 'third-footer-widget-area' )) : ?>
        
        <div class="third-footer-widget-area">
            <ul class="sidebar">
                <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
            </ul>
        </div>
        
        <?php endif;?>
        
        <?php if (is_active_sidebar( 'fourth-footer-widget-area' )) : ?>
        
        <div class="fourth-footer-widget-area">
            <ul class="sidebar">
                <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
            </ul>
        </div>
        
        <?php endif;?>
        
        </div>
    
    </div>
    
    <div class="clear"></div>
    
<?php endif;?>