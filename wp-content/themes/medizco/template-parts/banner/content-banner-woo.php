<?php

$banner_image    = '';
$banner_bgimg    = '';
$banner_bgovl    = '';
$banner_title    = '';
$banner_style    = 'full';

if ( defined( 'FW' ) ):

    $banner_settings          = medizco_option('xs_woo_banner_setting');

    // Title
    if ( $banner_settings['xs_woo_banner_title'] != '' ):
        $banner_title = $banner_settings['xs_woo_banner_title'];
    endif;

    // Image
    if( is_array( $banner_image ) && $banner_image['url'] != '' ):
        $banner_image = $banner_image['url'];
    elseif ( is_array($banner_settings['xs_woo_banner_image']) && $banner_settings['xs_woo_banner_image']['url'] != ''):
        $banner_image = $banner_settings['xs_woo_banner_image']['url'];
    else:
        $banner_image = MEDIZCO_IMG.'/banner/page-banner-img.jpg';
    endif;

    // Background Image
    if( is_array( $banner_bgimg ) && $banner_bgimg['url'] != '' ):
        $banner_bgimg = $banner_bgimg['url'];
    elseif ( is_array($banner_settings['xs_woo_banner_bg']) && $banner_settings['xs_woo_banner_bg']['url'] != ''):
        $banner_bgimg = $banner_settings['xs_woo_banner_bg']['url'];
    else:
        $banner_bgimg = MEDIZCO_IMG.'/banner/page-banner-bg.png';
    endif;

    // Show
    $show = ( isset( $banner_settings['xs_woo_show_banner'] ) ) ? $banner_settings['xs_woo_show_banner'] : 'yes';

    // Breadcumb
    $show_breadcrumb = ( isset( $banner_settings['xs_woo_show_breadcrumb'] ) ) ? $banner_settings['xs_woo_show_breadcrumb'] : 'yes';
else:
    // Default
    $banner_image             = '';
    $banner_bgimg             = '';
    $show                     = 'yes';
    $show_breadcrumb          = 'yes';
endif;

if ( $banner_image != ''):
    $banner_image = 'src="'.esc_url( $banner_image ).'"';
endif;

if ( $banner_bgimg != ''):
    $banner_bgimg = 'background-image: url('.esc_url( $banner_bgimg ).');';
    $banner_bgovl = ' overlay';
endif;
?>

<?php if( isset( $show ) && $show == 'yes' ): ?>
<div class="page_banner">
    <?php if ( $banner_image ): ?>
    <div class="page_banner_img">
        <img <?php echo wp_kses_post( $banner_image ); ?> alt="<?php echo esc_attr( $banner_title ); ?>" class="w-100">
    </div>
    <?php endif; ?>

    <div class="page_banner_content <?php echo esc_attr( $banner_bgovl ); ?>" style="<?php echo esc_attr( $banner_bgimg ); ?>">
        <div class="container d-lg-flex justify-content-between">
            <h1 class="page_banner_title">
			<?php
			if(is_archive()){
				the_archive_title();
			}elseif(is_single()){
				the_title();
			}else{
				wp_title();
			}
			?>
            </h1>
            <?php
            if( isset( $show_breadcrumb ) && 'yes' == $show_breadcrumb ):
                medizco_get_breadcrumbs('-');
            endif;
            ?>
        </div>
    </div>
</div><!-- .medizco_banner -->
<?php
endif;
