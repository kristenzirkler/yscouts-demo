<?php

/**
 * Default Sidebar
 * by www.unitedthemes.com
 */

// count the active sidebars to determine column sizes
$sidebars = is_active_sidebar( 'first-footer-widget-area' ) + is_active_sidebar( 'second-footer-widget-area' ) + is_active_sidebar( 'third-footer-widget-area' ) + is_active_sidebar( 'fourth-footer-widget-area' );
$sidebargrid = "grid-100";

if ($sidebars == "1") {
    
    // if only one - fullwidth
    //$sidebargrid = "grid-100 tablet-grid-100 mobile-grid-100";
    $sidebargrid = "grid-100";

} elseif ($sidebars == "2") {
    
    // if two, split in half
    //$sidebargrid = "grid-50 tablet-grid-50 mobile-grid-100";
    $sidebargrid = "grid-100";
    
} elseif ($sidebars == "3") {
    
    // if three, divide in thirds
    //$sidebargrid = "grid-33 tablet-grid-33 mobile-grid-100";
    $sidebargrid = "grid-100";

} elseif ($sidebars == "4") {
    
    // if four, split in fourths
    //$sidebargrid = "grid-25 tablet-grid-50 mobile-grid-100";
    $sidebargrid = "grid-100";
    
} ?>

<?php if ($sidebars) : ?>
    
    <?php if (is_active_sidebar( 'first-footer-widget-area' )) : ?>
    <div class="ys-footer-contact first-footer-widget-area">
        <div class="<?php echo $sidebargrid;?>">
            <ul class="sidebar">
                <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
            </ul>
        </div>
    </div>
    <?php endif;?>

    <div class="ut-footer-area">

        
        <?php if (is_active_sidebar( 'second-footer-widget-area' )) :?>
        
        <div class="second-footer-widget-area <?php echo $sidebargrid;?>">
            <ul class="sidebar">
                <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
            </ul>
        </div>
        
        <?php endif;?>
        
        <?php if( $sidebars == "4" ) { echo '<div class="clear hide-on-desktop hide-on-mobile"></div>'; } ?>
        
        <?php if (is_active_sidebar( 'third-footer-widget-area' )) : ?>
        
        <div class="third-footer-widget-area <?php echo $sidebargrid;?>">
            <ul class="sidebar">
                <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
            </ul>
        </div>
        
        <?php endif;?>
        
        <?php if (is_active_sidebar( 'fourth-footer-widget-area' )) : ?>
        
        <div class="<?php echo $sidebargrid;?>">
            <ul class="sidebar">
                <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
            </ul>
        </div>
        
        <?php endif;?>
    
    </div>
    
    <div class="clear"></div>
    
<?php endif;?>