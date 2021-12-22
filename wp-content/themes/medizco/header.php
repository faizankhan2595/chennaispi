<?php
/**
* The header template for the theme
edited by northeastwebdesigner.com seo structured by easyseocheck.com
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-207305029-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-207305029-1');
</script>
	
<script>
(function (w, d, s, u) {
w.gbwawc = {
url: u,
options: {
        waId: "+919150955655",
        siteName: "Dr Vignesh Pushparaj",
        siteTag: "Online",
        siteLogo: "https://www.chennaispinecare.com/wp-content/uploads/elementor/thumbs/Annaamalai-ortho-and-spine-center-pdhea9gvghbqqpy9khmpbnbsry87s427pevpgcwqjc.png",
        widgetPosition: "LEFT",
        triggerMessage: "",
        welcomeMessage: "Welcome to Annaamalai Ortho & Spine Centre",
        brandColor: "#25D366",
        messageText: "I am looking for:",
        replyOptions: ['Back Pain Solution','Surgery','Consultation',''],
    },
};
var h = d.getElementsByTagName(s)[0],
j = d.createElement(s);
j.async = true;
j.src = u + "/whatsapp-widget.min.js?_=" + Math.random();
h.parentNode.insertBefore(j, h);
})(window, document, "script", "https://waw.gallabox.com");
</script>

	
</head>
<body <?php body_class(); ?>>

    <?php
   if(function_exists('medizco_preloader')){

       medizco_preloader();
   }

    $header_builder_enable = medizco_option( 'header_builder_enable', 'no' );
    $header_settings = medizco_option( 'theme_header_default_settings' );

    if ( $header_builder_enable == 'yes' && class_exists('ElementsKit_Lite') ) {
        if ( class_exists('\ElementsKit\Utils::render_elementor_content') ) {
            echo \ElementsKit\Utils::render_elementor_content( $header_settings['yes']['medizco_header_builder_select'] );
        } else {
            $elementor = \Elementor\Plugin::instance();
            echo \ElementsKit\Utils::render($elementor->frontend->get_builder_content_for_display( $header_settings['yes']['medizco_header_builder_select'] ) );
        }
    } else {
        get_template_part( 'template-parts/headers/header', 'content' );
    }
